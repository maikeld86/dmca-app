<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notice extends Model
{

    /**
     * fillable fields for a new notice
     * @var array
     */
    protected $fillable = [
        'infringing_title',
        'infringing_link',
        'original_link',
        'original_description',
        'template',
        'content_removed',
        'provider_id',
    ];

    /**
     * A notice belongs to a recipient/provider
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function recipient()
    {
        return $this->belongsTo('App\Provider', 'provider_id');
    }

    /**
     * A notice is created by a user.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * Get the email addres for the recipient of the DMCA
     *
     * @return string
     */
    public function getRecipientEmail()
    {
       // return $this->recipient()->copyright_email;

        return $this->recipient->copyright_email;


    }

    /**
     * get the email address of the owner of the notice.
     *
     * @return string
     */
    public function getOwnerEmail()
    {
        return $this->user->email;
    }
}
