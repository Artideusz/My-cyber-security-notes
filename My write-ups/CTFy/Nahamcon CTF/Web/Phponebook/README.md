# Challenge: Phphonebook

## Description:
```
Ring ring! Need to look up a number? This phonebook has got you covered! But you will only get a flag if it is an emergency!

Connect here:
http://jh2i.com:50002
```
The domain points to `/index.php/?file=`.

Upon entering the following URL `http://jh2i.com:50002/phphonebook.php`, we are greeted with a new page containing an input.

I think that the lookup is entered by a query in a MySQL Database, but that's just an assumption.

```
    'SELECT <something> FROM <table> WHERE number='.POST['number'].';'
```