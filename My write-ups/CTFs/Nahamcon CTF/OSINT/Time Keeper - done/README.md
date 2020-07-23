# Challenge: Time Keeper

## Description: There is some interesting stuff on this website. Or at least, I thought there was... Connect here: https://apporima.com/ Note, this flag is not in the usual format.

The site navigates us to a blog site. Since this is an OSINT challenge, we will need to research a bit about the person.

- Twitter Page: https://twitter.com/apporima
    - Pinned tweet: https://twitter.com/apporima/status/1202795940576448513
- Name and surname: Trevor Bryant
- From: Washington DC
- Github: https://github.com/trevorbryant

- ## First blog (desolate - 17.04.19)
    - The blog post consists of an image of R2D2 and C3PO with text `What a desolate place this is.` from Star Wars in ASCII format that is also an image. The image has a title attribute saying: `Don’t call me a mindless philosopher, you overweight glob of grease!`
        - The image is named `churchmag.png`
        - The image does not contain any crucial information in it's metadata.

In the source of the page, we have comments in almost every blog post.
- ### BUZZ WORDS
    - Located in a p tag in the article tag `DevOps: A History in Configuration Management`
- ###  I fear that they may have just hit the 'move fast and break things' era that industry is finally realizing was a horrible idea. -- @peiriannydd
    - Located in a p tag in the article tag `Rookie of the Year`

Web.archive:
- snapshot 09.05.20
    - The only change is that the BUZZ WORDS comment is not there anymore.
- snapshot 18.04.20
    - There is a new blog that has the following description: `Today, I created my first CTF challenge. The flag can be found at forward slash flag dot txt`
    - If we append /flag.txt to the current web.archive URL, we get the flag.
