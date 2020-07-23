# SQL Injection

An SQL Injection is a type of a cyber-attack that leverages input or HTTP requests to extract data from a database. It's the most common cyber-attack according to the [OWASP Top 10](https://owasp.org/www-project-top-ten/) ranking of the most common web application security risks.

There are basically 2 types of SQL Injection:

## In-band / Classic SQLi

This is the most common and easy-to-exploit attack. It occurs when an attacker is able to use the same communication channel to gather results and launch attacks, like an input in a web-page or an open SQL port on the server that can be accessed publicly.

### **Error-Based SQLi**

#### How does it work?
This is a type of in-band / classic SQL Injection where the attacker relies on error messages thrown by a database to obtain information about the database itself. An attacker sometimes only needs one error to enumarate a whole database and launch an attack.

### How to prevent it?
This attack is mostly possible by the developer or the maintainer not disabling error messages in the production phase. Also a good idea would be to sanitize the input and use prepared statements.

### Links related to Error-Based SQLi:
- [MySQL Error-Based SQLi using the exp() function.](https://www.exploit-db.com/docs/english/37953-mysql-error-based-sql-injection-using-exp.pdf)

### **Union-Based SQLi**

#### How does it work?
Union-Based SQLi attack mainly relies on the UNION operator, allowing us to display all the tables in the database rather than a list of products in a shopping site. It works by figuring out how many columns is returned from a query, and then appending additional data that should not be returned in the first place, using the same number of columns returned by the initial query. A simple process of this would be:
```
We have an unsanitized query:

    "SELECT ? FROM ? WHERE name=".POST['name'].";"

Since we don't know the amount of columns provided by the query we can try the following input: 

    " UNION SELECT null OR "1

The query results in:

    "SELECT ? FROM ? WHERE name="" UNION SELECT null OR "1";"

Let's say that the query did not return any data. This means that there is more than one column returned in the first SELECT operator.

We add another null to our second SELECT operator until we recieve some data. When we know the amount of columns returned in the first SELECT, we can populate the nulls with data that should not be accessed by the user:

    "SELECT ?,?,? FROM ? WHERE name="" UNION SELECT table_schema,table_name,@@version FROM information_schema.tables UNION SELECT null,null,"0";"

This kind of query sent to the database results in information about the database location, table name and version of the OS the database is running on. The second UNION select is for the " left from the injection since we're using the WHERE operator in the first UNION operator.
```
#### How to prevent it?
It is mandatory to use prepared statements for queries to prevent most of the SQLi's that are available. I also recommend checking out the [SQL Injection Prevention Cheat Sheet](https://cheatsheetseries.owasp.org/cheatsheets/SQL_Injection_Prevention_Cheat_Sheet.html) for more information.

### Links related to Union-Based SQLi:
- [NetSPI SQL Injection Wiki - Information Gathering](https://sqlwiki.netspi.com/attackQueries/informationGathering/#mysql)

## Inferential / Blind SQLi

This type of attack is slower than classical SQLi, since he does not have any ouput that is displayed, like it was the case in Union-Based or Error-Base SQLi's, but it's still harmful since he has access to all the SQL commands.

### **Time-Based SQLi**

#### How does it work?

This type of attack relies on the SLEEP function or any technique that delays the response. The attacker can append a SLEEP function to enumerate the database based on the result. If a query is true, the database response takes longer to be recieved. Thanks to this technique, the attacker can enumerate the whole database and do alot of damage.

#### How to prevent it?
It is mandatory to use prepared statements for queries to prevent most of the SQLi's that are available. I also recommend checking out the [SQL Injection Prevention Cheat Sheet](https://cheatsheetseries.owasp.org/cheatsheets/SQL_Injection_Prevention_Cheat_Sheet.html) for more information.

### **Boolean-Based SQLi**

This technique is similar to the time-based attack, but rather than delaying the response, the response changes depending if the result of the query is TRUE or FALSE. The attacker must distinguish the difference in the content when the result is true of false, only then he can launch a boolean-based SQLi attack.

#### How to prevent it?
It is mandatory to use prepared statements for queries to prevent most of the SQLi's that are available. I also recommend checking out the [SQL Injection Prevention Cheat Sheet](https://cheatsheetseries.owasp.org/cheatsheets/SQL_Injection_Prevention_Cheat_Sheet.html) for more information.

## Tools for SQL Injection scanning

### **SQLMap**

SQLMap is a database assessment tool that focuses on automatic testing for SQLi's in an application. It supports a huge list of DBMSes and it's worth learning the syntax for it if you want to automate SQL Injection checks. I recommend learning how to write SQL Injection strings manually though if you are a beginner so you have a better understanding on how SQL Injections work in general and how SQLMap works under the hood as well.

- SQLMap Homepage: http://sqlmap.org/
- SQLMap wiki: https://github.com/sqlmapproject/sqlmap/wiki

## Useful resources:
- [How to prevent SQLi attacks?](https://www.esecurityplanet.com/threats/how-to-prevent-sql-injection-attacks.html)
- [SQL Injection Prevention Cheat Sheet](https://cheatsheetseries.owasp.org/cheatsheets/SQL_Injection_Prevention_Cheat_Sheet.html)
- [OWASP - Blind SQL Injection](https://owasp.org/www-community/attacks/Blind_SQL_Injection)
- [Basic step-by-step concept of SQL Injection - hacksplaining.com](https://www.hacksplaining.com/exercises/sql-injection#)
- [Redtiger - OverTheWire](https://redtiger.labs.overthewire.org/)
- [PayloadsAllTheThings - SQL Injection Cheat Sheet List](https://github.com/swisskyrepo/PayloadsAllTheThings/tree/master/SQL%20Injection)

*Docker container for SQL Injection attack and defense practice soon!*
