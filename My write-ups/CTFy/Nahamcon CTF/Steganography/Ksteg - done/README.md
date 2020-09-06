# Challenge: Ksteg

## Description: 
```
This must be a typo.... it was kust one letter away!

Download the file below.
```
We are given an image. Let's extract some info from it:

exiftool results:
```
ExifTool Version Number         : 10.80
File Name                       : luke.jpg
Directory                       : .
File Size                       : 23 kB
File Modification Date/Time     : 2020:06:12 23:44:11+02:00
File Access Date/Time           : 2020:06:12 23:44:12+02:00
File Inode Change Date/Time     : 2020:06:12 23:44:11+02:00
File Permissions                : rw-rw-r--
File Type                       : JPEG
File Type Extension             : jpg
MIME Type                       : image/jpeg
Image Width                     : 400
Image Height                    : 400
Encoding Process                : Baseline DCT, Huffman coding
Bits Per Sample                 : 8
Color Components                : 3
Y Cb Cr Sub Sampling            : YCbCr4:2:0 (2 2)
Image Size                      : 400x400
Megapixels                      : 0.160
```

Binwalk results:
```
DECIMAL       HEXADECIMAL     DESCRIPTION
--------------------------------------------------------------------------------
```

Source code:
```
Nothing interesting
```

file results:
```
luke.jpg: JPEG image data, baseline, precision 8, 400x400, frames 3
```

There are two typos in the challenge:
- KSteg.
- and kust. (as just)

If you google JSteg, there is a github project "Jsteg - JPEG Steganography", let's install this and extract the data with the tool.

Since I did not have golang installed on my machine and the project is written in it, I had to do that first before trying to extract the data.

```
./jsteg-linux-amd64 reveal luke.jpg
```
Outputs the flag.