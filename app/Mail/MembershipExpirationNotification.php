<?php

namespace App\Mail;

use Carbon\Carbon;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\UserMembership;

class MembershipExpirationNotification extends Mailable
{
    use Queueable, SerializesModels;

    public $membership;
    public $today;

    // Constructor to pass membership and today's date
    public function __construct(UserMembership $membership, Carbon $today)
    {
        $this->membership = $membership;
        $this->today = $today;
    }

    // Build the email with subject and view
    public function build(): MembershipExpirationNotification
    {
        return $this->subject('Your Membership is About to Expire')
            ->view('mail.membership_expiration')
            ->with([
                'membership' => $this->membership,
            ]);
    }

}
