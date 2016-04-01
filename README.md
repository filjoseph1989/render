# RENDER #

An simple and clean alternative class to render your view in CodeIgniter.

### What is this repository for? ###
____________________________________

* Quick summary

This class was developed as an alternative for $this->view() in CodeIgniter, allowing you to organize a clean hierarchy for
your fragments i.e. Modals or alerts. This class allows you to use variable a particular part of the view instead of using

$this->view('path/to/the/fragments/my_fragment', $data).

* Version 1.0.0

### How do I get set up? ###
____________________________
* Configuration

1. Copy file to the corresponding directory in your application and create a same folders in your view
2. Open config/constants.php and put this is the last line of the file
define('D', DIRECTORY_SEPARATOR);
3. Extends your controller to My_Controller
4. Use parent::render($data) in your method
* How to run tests

### Contribution guidelines ###
_______________________________

* Writing tests
* Code review
* Other guidelines

### Who do I talk to? ###
_________________________

* Repo owner or admin
This class is created by: Fil Joseph Elman

* Other community or team contact
