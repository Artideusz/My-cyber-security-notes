# Challenge: Agent 95

## Description: 
```
They've given you a number, and taken away your name~

Connect here:
http://jh2i.com:50000
```

We are greeted with a webpage containing the following text:
```
You don't look like our agent!
We will only give our flag to our Agent 95! He is still running an old version of Windows...
```

I opened postman, copied the request and changed the User-Agent header to:
```
Mozilla/4.0 (compatible; MSIE 5.5; Windows 95; BCD2000)
```

The result contains the flag.