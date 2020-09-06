# Challenge: New Years Resolution

## Description:
```
This year, I resolve to not use old and deprecated nameserver technologies!

There is nothing running on port 80. This is an OSINT challenge.

Connect here: jh2i.com
```

Whois results:
```
Registrant	Contact Privacy Inc. Customer 1245566205
Registrant Org	Contact Privacy Inc. Customer 1245566205
Registrant Country	ca
Registrar	Google LLC
IANA ID: 895
URL: https://domains.google.com,http://domains.google.com
Whois Server: whois.google.com

Registrar Status	clientTransferProhibited
Dates	256 days old
Created on 2019-09-30
Expires on 2020-09-30
Updated on 2019-09-30	  
Name Servers	NS-CLOUD-A1.GOOGLEDOMAINS.COM (has 5,245,182 domains)
NS-CLOUD-A2.GOOGLEDOMAINS.COM (has 5,245,182 domains)
NS-CLOUD-A3.GOOGLEDOMAINS.COM (has 5,245,182 domains)
NS-CLOUD-A4.GOOGLEDOMAINS.COM (has 5,245,182 domains)
  
Tech Contact	Contact Privacy Inc. Customer 1245566205
96 Mowat Ave,
Toronto, ON, M4K 3K1, ca

IP Address	165.227.89.231 - 2 other sites hosted on this server
Reverse IP  
IP Location	United States Of America - New York - New York City - Digitalocean Llc
ASN	United States Of America AS14061 DIGITALOCEAN-ASN, US (registered Sep 25, 2012)
Domain Status	Registered And Active Website
IP History	21 changes on 21 unique IP addresses over 13 years	  
Registrar History	1 registrar	  
Hosting History	7 changes on 5 unique name servers over 14 years
```

There are 3 domains registered on this address:
- jh2i.com <- 404
- homecrestwriters.com <- Online essay help for college students
- aora.tv <- DNS_PROBE_FINISHED_NXDOMAIN

nslookup results:
```
Server:         127.0.0.53
Address:        127.0.0.53#53

Non-authoritative answer:
Name:   jh2i.com
Address: 161.35.252.71
```

jh2i.com has 3 subdomains:
- flag-certsearch-lol-ssl-1337.jh2i.com (206.189.253.235)
- jh2i.com (161.35.252.71)
- www.jh2i.com (161.35.252.71)

Whois lookup for `flag-certsearch-lol-ssl-1337.jh2i.com`:
```

Registrant	Contact Privacy Inc. Customer 1245566205
Registrant Org	Contact Privacy Inc. Customer 1245566205
Registrant Country	ca
Registrar	Google LLC
IANA ID: 895
URL: https://domains.google.com,http://domains.google.com
Whois Server: whois.google.com

(p)
Registrar Status	clientTransferProhibited
Dates	256 days old
Created on 2019-09-30
Expires on 2020-09-30
Updated on 2019-09-30	  
Name Servers	NS-CLOUD-A1.GOOGLEDOMAINS.COM (has 5,245,182 domains)
NS-CLOUD-A2.GOOGLEDOMAINS.COM (has 5,245,182 domains)
NS-CLOUD-A3.GOOGLEDOMAINS.COM (has 5,245,182 domains)
NS-CLOUD-A4.GOOGLEDOMAINS.COM (has 5,245,182 domains)
  
Tech Contact	Contact Privacy Inc. Customer 1245566205
96 Mowat Ave,
Toronto, ON, M4K 3K1, ca

(p)
IP Address	165.227.89.231 - 2 other sites hosted on this server
  
IP Location	United States Of America - New York - New York City - Digitalocean Llc
ASN	United States Of America AS14061 DIGITALOCEAN-ASN, US (registered Sep 25, 2012)
Domain Status	Registered And Active Website
IP History	21 changes on 21 unique IP addresses over 13 years	  
Registrar History	1 registrar	  
Hosting History	7 changes on 5 unique name servers over 14 years
```
This is probably for a different challenge.