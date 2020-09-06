# Challenge: Mr. Robot

## Description: Elliot needs your help. You know what to do. Connect here: http://jh2i.com:50032

We are given a URL with a poster of Mr. Robot with a caption saying: "No rest for the wicked" - Mr. Robot

I downloaded the image and checked it using exiftool and binwalk.

Exiftool results:
```
ExifTool Version Number         : 10.80
File Name                       : poster.jpg
Directory                       : .
File Size                       : 30 kB
File Modification Date/Time     : 2020:06:12 18:37:31+02:00
File Access Date/Time           : 2020:06:12 18:37:41+02:00
File Inode Change Date/Time     : 2020:06:12 18:37:39+02:00
File Permissions                : rw-rw-r--
File Type                       : JPEG
File Type Extension             : jpg
MIME Type                       : image/jpeg
JFIF Version                    : 1.01
Resolution Unit                 : None
X Resolution                    : 1
Y Resolution                    : 1
Image Width                     : 368
Image Height                    : 550
Encoding Process                : Progressive DCT, Huffman coding
Bits Per Sample                 : 8
Color Components                : 3
Y Cb Cr Sub Sampling            : YCbCr4:2:0 (2 2)
Image Size                      : 368x550
Megapixels                      : 0.202
```

Binwalk results:
```
DECIMAL       HEXADECIMAL     DESCRIPTION
--------------------------------------------------------------------------------
0             0x0             JPEG image data, JFIF standard 1.01
```

Next, I checked the source code of the webpage, but found nothing.

I thought about checking /robots.txt, since the challenge is called Mr. Robot, and that is the solution.


