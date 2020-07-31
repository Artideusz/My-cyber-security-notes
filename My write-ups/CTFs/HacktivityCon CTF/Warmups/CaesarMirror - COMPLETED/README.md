# Challenge: CaesarMirror

## Description: Caesar caesar, on the wall, who is the fairest of them all? Download the file below.
## Points: 20

Since the challenge says about caesar, we know it is a caeser cipher related challenge. I went with the lazy approach and decoded the caesar cipher using [this website](https://www.dcode.fr/caesar-cipher). The result is the following:
```
OH BOY WOW THIS WARMUP CHALLENGE SURE OSIREHTEGOTTUPOTNUFFOTOLASAW DEFINITELY ABSOLUTELY ALWAYS LOVE TRYING SGNIHTEVITAVONNIDNAWENPUKNIHTOT TO DO WITH THE VERY BASIC COMMON AND FOTRAPTSRIFEHTSEUQINHCETFTCC ISSALC YOUR FLAG IS FLAGJULIUS AND THAT IS A GNIHTYREVETONSITITUBTRATSTAERG THAT YOU WILL NEED TO SOLVE THIS CHALLENGE DNAEDIHOTGNIYRTEKILTNODI SEPARATE EACH PART OF THE FLAG THESE CONDO DUOYTUBANISIGALFEHTFOTRAP NEED JUST A LITTLE BIT MORE WHAT EXACTLY EKAMDNAYRTOTEREHEDULCNIEWDLUOHS
THIS FILLER TEXT LOOK MORE ENGAGING AND SENILWENDDAEWDLUOHSELIHWHTROW SHOULD WE ADD SPACES AND TRY AND MAKE IT HGUONESISENILYNAMWOHLACIRTEMMYSTOMAKETHISFILLERTEXTLOOKBELIEVABLEAANIHTIWSRETTELFOERAUQSDILOSSIMPLEMONO SPACE FONT TEXT FILE LOOKS GOOD EHTTATSOMLAEWERAEMOTHGUONEEND IT LOOKS LIKE IT I HOPE IT IS GOOD NOITCELFERSIGALFRUOYFOTRAPDRIHTEHTANDAT THIS POINT YOU SHOULD HAVE EVERYTHING ROFGALFSIHTTIMBUSOTDEENUOYTAHT POINTS THE BEGINNING IS MARKED WITH THE ECARBYLRUCGNINEPOEHTDNAXIFERPGALFANDITINCLUDESENGLISHWORDSSEPARATEDBYYLRUCGNISOLCANIDNEOTSEROCSREDNUBRACEWOWNOWTHATISACTFWHOKNEWWESIHTOTREHPICRASEACEHTKLIMD
```
The right side of the file is inverted text so we also need to decode this part of the message too. I went with a different approach and used the `rev` and the `tr` command to decode the whole text:
```
     Oh boy! Wow, this warmup challenge sure   was a lot of fun to put together! I so
    definitely absolutely always love trying   to think up new and innovative things
       to do with the very basic, common and   classic CTF techniques! The first part of
     your flag is flag{julius_ and that is a   great start but it is not everything
 that you will need to solve this challenge.   I don't like trying to hide and
  separate each part of the flag. The second   part of the flag is _in_a_ but you do
   need just a little bit more. What exactly   should we include here to try and make
     this filler text look more engaging and   worthwhile? Should we add newlines?
    Should we add spaces and try and make it   symmetrical? How many lines is enough
 to make this filler text look believable? A   solid square of letters within a
 simple, monospace-font text file looks good   enough to me. Are we almost at the
   end? It looks like it! I hope it is good.   The third part of your flag is reflection}
and at this point you should have everything   that you need to submit this flag for
    points. The beginning is marked with the   flag prefix and the opening curly brace,
  and it includes English words separated by   underscores, to end in a closing curly
  brace. Wow! Now THAT is a CTF! Who knew we   could milk the caesar cipher to this
            extent?? Someone get that Julius   Caesar guy a medal!
```
Took a while since i'm a lazy individual and with the power of copying and pasting commands in the terminal I solved the challenge, the flag is in the decoded output.