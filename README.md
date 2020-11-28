# CPNT200 - Assignment 2: Customer admin

By Emil Joseph

## Attributions

Worked together with [Nhat](https://github.com/nhaatn)  
Instructor's starter code.

## Links

[Github repo link](https://github.com/ejoseph89/cpnt200-a2).

## Project overview

- Mock admin panel with two pages
  - index.php - shows a page with a list of customers from the provided database
  - customer.php?id=n - shows a page with one customer who's id is 'n' 
    - Once visited, this page offers a link to go back to index.php
  - error.php displays an error message when database connection fails

## Comments

- Somewhat challenging becase of a lack of in-depth knowledge of php and mysql
- Use php docs, especially for `isset()` and `$_GET`
- Also checked [w3schools](https://www.w3schools.com/) for similar examples
- Issues:
  - `customer.php?id=n` was not echo-ing. Solved by working with Nhat, and using `vardump` to see which array was being echo-ed and changed the code within html to reflect that