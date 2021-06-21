<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class MessNotification extends Notification
{
    use Queueable;
    private $Detail;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($Detail)
    {
        $this->Detail = $Detail;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->line('The introduction to the notification.')
                    ->action('Notification Action', url('/'))
                    ->line('Thank you for using our application!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            'EmpID' => $this->Detail['EmpID'],
            'EmpName' => $this->Detail['EmpName'],
            'Status' => $this->Detail['Status'],
            'ContentID' => $this->Detail['ContentID'],
            'ContentName' => $this->Detail['ContentName'],
        ];
    }
}
