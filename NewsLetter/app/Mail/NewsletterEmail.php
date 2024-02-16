<?php

namespace App\Mail;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Storage;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class NewsletterEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $title;
    public $content;
    public $filePath;
    public $email;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($title, $content, $media, $email)
    {
        $this->title = $title;
        $this->content = $content;
        $this->media = $media;
        $this->email = $email;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $media = Media::find($this->media);
        return $this->subject($this->title)
            ->to($this->email)
            ->attach($media)
            ->html(htmlspecialchars_decode($this->content));
    }
}
