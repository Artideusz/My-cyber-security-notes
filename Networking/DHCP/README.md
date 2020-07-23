# DHCP - Dynamic Host Configuration Protocol

## What is it?
DHCP is a UDP network management protocol that dynamically assigns a device connected on a network an IP address that will prevent colliding with other IP addresses on the same network. This protocol exists in every type of network from small LAN networks, to the internet.

## What port does it use?
- It uses UDP.
- Uses port 67 for the DHCP server.
- Uses port 68 for the clients.

## What is it used for?
DHCP allows other devices connected to a network to have their own new IP address automatically so they can recieve packets and communicate with other hosts.

## How does it work?
There are four steps to have your own IP on a network, explained simply:
1. The newly connected device broadcasts a `DHCPDISCOVER` message using the destination address of `255.255.255.255`.
2. The DHCP server recieves the packet and sends out back to that client an `OFFER` message containing an IP address that is offered to the device.
3. The client broadcasts a `DHCPREQUEST` packet containing the IP address that the client wants.
4. The server sends a `DHCPACK` (acknowledgment) message, completing the configuration.

## What security flaws exist within this protocol?
There are 2 types of attacks that exist within DHCP:
- **DHCP Starvation attack**
    - This attack takes advantage of the lack of authentication in the protocol. An attacker could craft DHCPDISCOVER packets with spoofed MAC addresses and send them to the server with an intent of exhausting the DHCP server's IP address pool. This attack is a type of DoS attack, because it causes devices that want to connect to the network to wait until an IP address is available.
- **DHCP Spoofing**
    - The way this attack works is that a "rogue" or unauthorized DHCP server is sending fake information to DHCP clients. This attack can work as a DoS attack, or a MiTM attack, because the rogue server can also send DNS IP addresses to clients, which means that the server can eavedrop on connections between the client and server, or even replace those servers with its own.

## How to prevent DHCP Spoofing?
With DHCP snooping - Read about it later. 

https://en.wikipedia.org/wiki/DHCP_snooping


### Useful links
- [Wikipedia - DHCP](https://en.wikipedia.org/wiki/Dynamic_Host_Configuration_Protocol)
- [CVE Details - DHCP Vulnerabilities](https://www.cvedetails.com/vulnerability-list/vendor_id-64/product_id-17706/ISC-Dhcp.html)