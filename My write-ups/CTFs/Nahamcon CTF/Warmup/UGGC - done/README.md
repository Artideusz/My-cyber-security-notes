# Challenge: UGGC

## Description: Become the admin! Connect here: http://jh2i.com:50018

We are greeted with a prompt telling us to choose a username to login. I will use AAABBB.

- POST URL: http://jh2i.com:50018/login
- POST parameters:
    - username: AAABBB

Response: 
```
You are logged in as AAABBB.

Sorry, only admin can see the flag.
```

The cookie given to me is user=NNNOOO, I assume that this is a caesar cipher or ROT-13 encoding.

I will attempt to ROT-13 encode the word "admin" and change the cookie to the value.
```
    echo "admin" | tr a-z n-za-m
```
output: nqzva

I am going to change the cookie by assigning the value to document.cookie and see if that works.

```
    document.cookie = "user=nqzva"
```

Result after refreshing the page:
```
You are logged in as admin.
Congratulations here is your flag!

flag{H4cK_aLL_7H3_C0okI3s}
```