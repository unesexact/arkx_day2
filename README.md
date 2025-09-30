## 🔹 1. Reverse a String

**Problem:**  
Write a PHP function that takes a string and returns it reversed.  
**Example:**  
`Input: "hello"` → `Output: "olleh"`

## 🔹 2. Check if a Number is Prime

**Problem:**  
Write a function that checks if a number is **prime**.  
**Example:**  
`Input: 7` → `Output: true`  
`Input: 10` → `Output: false`

## 🔹 3. Find the Factorial

**Problem:**  
Write a function that calculates the factorial of a given number using a loop.  
**Example:**  
`Input: 5` → `Output: 120`
 
 ## 🔹 4. Palindrome Checker

**Problem:**  
Check if a string is a palindrome (the same forwards and backwards).  
**Example:**  
`Input: "radar"` → `Output: true`  
`Input: "apple"` → `Output: false`


## 📝 Exercise: Shopping Cart Total with Discounts

### Problem

You are building a small **shopping cart system** in PHP.  
Write a function that calculates the **total price** of items in a cart with these rules:

1.  Each item has a `name`, `price`, and `quantity`.
    
2.  If the total before discount is **greater than 100**, apply a **10% discount**.
    
3.  If a product’s quantity is more than **5 units**, apply a **5% discount on that product** before adding it to the total.
    

----------

### Example Input

```php
$cart = [
    ["name" => "Laptop", "price" => 40, "quantity" => 3],
    ["name" => "Mouse", "price" => 10, "quantity" => 6],
    ["name" => "Keyboard", "price" => 20, "quantity" => 2]
];
``` 

### Expected Output

`Total before  global discount: 200 Total after discounts: 180`
