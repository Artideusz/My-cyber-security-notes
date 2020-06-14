# Challenge: Peter Rabbit

## Description: Little Peter Rabbit had a fly upon his nose, and he flipped it and he flapped it and it flew away! Download the file below.

We are given an image. Let's extract data from it.

binwalk result:
```
DECIMAL       HEXADECIMAL     DESCRIPTION                                                                   │
--------------------------------------------------------------------------------                            │   Entropy Analysis Options:
0             0x0             PNG image, 970 x 970, 8-bit colormap, non-interlaced                          │       -E, --entropy
64            0x40            Zlib compressed data, best compression                                        │              Calculate file entropy
5494          0x1576          Zlib compressed data, best compression  
```

exiftool result:
```
ExifTool Version Number         : 10.80
File Name                       : peter.png
Directory                       : .
File Size                       : 8.2 kB
File Modification Date/Time     : 2020:06:12 19:33:09+02:00
File Access Date/Time           : 2020:06:12 19:33:09+02:00
File Inode Change Date/Time     : 2020:06:12 19:33:09+02:00
File Permissions                : rw-rw-r--
File Type                       : PNG
File Type Extension             : png
MIME Type                       : image/png
Image Width                     : 970
Image Height                    : 970
Bit Depth                       : 8
Color Type                      : Palette
Compression                     : Deflate/Inflate
Filter                          : Adaptive
Interlace                       : Noninterlaced
Exif Byte Order                 : Little-endian (Intel, II)
Bits Per Sample                 : 8 8 8
X Resolution                    : 300
Y Resolution                    : 300
Resolution Unit                 : inches
Software                        : GIMP 2.10.8
Photometric Interpretation      : YCbCr
Samples Per Pixel               : 3
Thumbnail Offset                : 272
Thumbnail Length                : 4644
Palette                         : (Binary data 768 bytes, use -b option to extract)
Pixels Per Unit X               : 11811
Pixels Per Unit Y               : 11811
Pixel Units                     : meters
Modify Date                     : 2020:06:05 22:35:12
Image Size                      : 970x970
Megapixels                      : 0.941
Thumbnail Image                 : (Binary data 4644 bytes, use -b option to extract)
```