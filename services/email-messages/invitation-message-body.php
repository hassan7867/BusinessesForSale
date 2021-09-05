<?php

namespace services\email_messages;

class InvitationMessageBody
{
    public function invitationMessageBody($listingName, $id, $subscription)
    {
        $emailBody = '
   <body>
   <div style="margin: 0 auto;max-width: 600px;background: rgba(211,211,211,0.68);padding: 30px">


             <div style="margin-left: 10px;margin-right: 10px;font-size: 17px;padding-top: 2px">Hello,</div>
             <div style="margin-left: 10px;margin-right: 10px;font-size: 17px;padding-top: 10px">Thank you for listing your business with '.env('APP_NAME').'. You have opted to list with the '.$subscription.' plan. Your listing is currently being processed. This usually takes one working day. We will contact you by email to confirm when the listing is live.</div>
             <div style="margin-left: 10px;margin-right: 10px;font-size: 17px;padding-top: 10px">Your Listing:	'.$listingName.'</div>
             <div style="margin-left: 10px;margin-right: 10px;font-size: 17px;padding-top: 10px">Listing Id:	'.$id.'</div>
             <div style="margin-left: 10px;margin-right: 10px;font-size: 17px;padding-top: 10px">If you have any questions about your listing, get in touch by replying to this email, quoting your Listing ID:	'.$id.'</div>
             <div style="margin-left: 10px;margin-right: 10px;font-size: 17px;padding-top: 10px">Kind regards,</div>
             <div style="margin-left: 10px;margin-right: 10px;font-size: 17px;padding-top: 10px">Customer Support,</div>
             <div style="margin-left: 10px;margin-right: 10px;font-size: 17px;padding-top: 10px">'.env('APP_NAME').'</div>
</div><br>
 </div>
            </body>
            ';
        return $emailBody;
    }

    public function verificationCode($code){
        $emailBody = '
   <body>
   <div style="margin: 0 auto;max-width: 600px;background: rgba(211,211,211,0.68);padding: 30px">


             <div style="margin-left: 10px;margin-right: 10px;font-size: 17px;padding-top: 2px">Your verification code is '.$code.'</div>
</div><br>
 </div>
            </body>
            ';
        return $emailBody;
    }

}
