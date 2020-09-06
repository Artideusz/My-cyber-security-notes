# Cross-site Scripting (aka XSS)

Cross-site scripting (or shortly called XSS) is a method of injecting javascript code to a web application without permission. The most dangerous thing about this is that XSS grants an attacker control over what other people see on the webpage or steal cookie information about a user who is unlucky enough to execute the attackers javascript code when an infected page loads. If an attacker has your session cookie, there is a pretty high chance he can use it to "log in" to your account and do damage (for example sending malicous links through your social media account to other people that trust you). 

Nowadays, session cookie theft is harder to pull off, mainly because the HttpOnly header exists and alot of frontend frameworks try to prevent XSS in general (not always works). But still, since the attacker has full control over the content of the page (and your browser), he might as well turn it into a login screen that looks similar to the real one on the page. Many people would just think that it's just some kind of hiccup of the site and log in again, giving sensitive information to the attacker.

There are three main types of XSS:

## Reflected XSS

### How does it work?

This type of XSS takes advantage of poorly sanitized output of a GET query to execute the javascript code. For example:
```
    1.  We have a URL: https://example.com?keyword=123

            That returns a page with text saying:
            "Sorry, no item named 123 exists in our database."

    2.  An attacker tests if javascript can be executed using the keyword parameter, so he crafts the following URL:

        https://example.com?keyword=<script>alert('XSS')</script>

            That returns an alert popup displaying the text "XSS".
```

This way the attacker can execute javascript in the victims browser, he could also mask the javascript code by encoding the characters in a way that doesnt look suspicious. For example:

`https://example.com?keyword=<script>alert('XSS')</script>` 

Would look like this: 

`https://example.com?keyword=%3c%73%63%72%69%70%74%3e%61%6c%65%72%74%28%27%58%53%53%27%29%3c%2f%73%63%72%69%70%74%3e`

### How to prevent it?

Always sanitize and validate user input. The easiest way to do that is to use a library that validates and sanitizes user input. I really recommend reading through the [OWASP XSS Prevention Cheat Sheet](https://cheatsheetseries.owasp.org/cheatsheets/Cross_Site_Scripting_Prevention_Cheat_Sheet.html).

## DOM-Based XSS

This attack is pretty similar to Reflected XSS, but it depends on the javascript that is already on the site. The way it differs from a reflected XSS attack is that the input is processed client-side only. The malicious code isn't sent from the server. For example:

```
    Let's say that we have the following URL:
        https://dynamic-page.com/?s=

    The page loads and javascript sends an AJAX request and after some time results in the following:
        -----------------------------------------
        |Search:                                |
        -----------------------------------------

        |  Item1  |  Item2  |  Item3  |  Item4  |
        ...

    Upon typing user input to the serachbar, items appear or disappear accordingly to what was typed (because of AJAX).

    If the attacker gives a simple script tag with an alert function to the input, the alert box opens.
```

DOM-based XSS can also be undetectable if fragments are used on the site (#), because fragments never get sent to the server, whereas parameters are. This kind of attack is more and more common as web applications become more advanced. Bare in mind that even if a website has a completely secure backend, that does not mean that the frontend will handle user input safely.

### How to prevent it?

OWASP has an extension guide for DOM-Based XSS [here.](https://cheatsheetseries.owasp.org/cheatsheets/DOM_based_XSS_Prevention_Cheat_Sheet.html)

## Persistent XSS

This is one of the more dangerous XSS attacks out there, since the malicious javascript is returned by the server itself. The way this is dangerous is that nobody really knows if the next page they load on the browser will be malicious or not, because the malicious code is not visible within the URL. This type of attack focuses on sending javascript code to a server, that later saves it in it's database and outputs it for everyone that views the page with that output from the database. A simple example would be:

- An attacker creates a post with javascript code as the content on a social media page.
- The server sends that input to a database.
- After some time, a user goes on a page where this post is fetched from the database.
- The server returns the post from the database with the malicious javascript to the victim.
- The malicious javascript code is executed.

### How to prevent it?

Similarly to the way reflected XSS is prevented.

## Tools for XSS Scanning

There are a ton of XSS scanning tools that I will describe in the next update.

## Useful Resource Links

- [Excess XSS - a good explanation of XSS](https://excess-xss.com/)
- [OWASP - DOM-Based XSS Prevention](https://cheatsheetseries.owasp.org/cheatsheets/DOM_based_XSS_Prevention_Cheat_Sheet.html)
- [OWASP - XSS Prevention Cheat Sheet](https://cheatsheetseries.owasp.org/cheatsheets/Cross_Site_Scripting_Prevention_Cheat_Sheet.html)
- [OWASP - XSS Filter Evasion Cheat Sheet](https://owasp.org/www-community/xss-filter-evasion-cheatsheet)
- [Kurobeats - XSS Vectors Cheat Sheet](https://gist.github.com/kurobeats/9a613c9ab68914312cbb415134795b45)
- [Google Gruyere](https://google-gruyere.appspot.com/)
- [DOM-Based XSS Explanation](http://www.webappsec.org/projects/articles/071105.shtml)
