# Challenge: Metameme

## Description: Hacker memes. So meta. Download the file below.

We are given an image of a meme.

First I will use binwalk to see if something else is hidden behind the image:

Binwalk result:
```
DECIMAL       HEXADECIMAL     DESCRIPTION
--------------------------------------------------------------------------------
0             0x0             JPEG image data, JFIF standard 1.01
202           0xCA            Unix path: /www.w3.org/1999/02/22-rdf-syntax-ns#'>
292           0x124           Unix path: /purl.org/dc/elements/1.1/'>
```

My solution was to grep the flag from the image.
```
    grep -a "flag" < hackermeme.jpg
```

Another solution was to use exiftool. The creator is the flag.

