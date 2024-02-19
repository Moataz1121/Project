<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class UpdatePasswordNotification extends Notification
{
    use Queueable;
    public $token;

    /**
     * Create a new notification instance.
     */
    public function __construct($token)
    {
        $this->$token = $token;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
                    ->line('You are receiving this email because we received a password reset request for your account.1.')
                    ->line('You are receiving this email because we received a password reset request for your account.2.')
                    ->line('You are receiving this email because we received a password reset request for your account.3.')
                    ->line('You are receiving this email because we received a password reset request for your account.4.')
                    ->action('Change Password', url('/reset-password' , $this->token))
                    ->line('This password reset link will expire in 60 minutes.1')
                    ->line('This password reset link will expire in 60 minutes.2')
                    ->line('This password reset link will expire in 60 minutes.3');
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
