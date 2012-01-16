BRANDID TWILIO SUPPORT LINE

A simple Twilio support system for BRANDiD.


WHAT IT DOES

1. Customer rings up and hears welcome message & hold music.
2. Twilio rings office support number. If answer, calls are joined. 
3. If no answer, Twilio rings mobile support number. If answer, calls are joined. 
4. If no answer, customer hears message asking to ring back.


HOW IT WORKS

- When they ring up, customers are put in a new conference identified by their CallSid. 
- Agents are connected to the same conference when they answer the phone. 
- If there's no answer, the customer's call is modified (sent to a new URL) where a 'sorry' message is played. 


USING THE CODE

It should work almost from the box, but there are a few config things that need setting first. 

application/config/config.php

- Point base_url at your site's URL
- Add an encryption key to encryption_key, maybe from here http://jeffreybarke.net/tools/codeigniter-encryption-key-generator/

application/config/twilio.php

- Set account_sid, auth_token and number to your Twilio account details. 
- Set caller_id to the default 'from' number you'd like to use if Twilio can't get the caller ID for some reason.
- Set support_office and support_mobile to your office (main) support and mobile (secondary) support numbers respectively. 
- Set mode to 'prod' when you want to deploy it. Note that caller_id *must* be a number you've verified with Twilio when in sandbox mode or it won't work. 
