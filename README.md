# Servay System
## Edit 

-create booking controller

-create booking  model 

-create book,edit, index views

-create client,booking,user db
=======

## add template files

- how to add template files

## new updated

- add session condition
- add template for login and signup pages
- belew code for controller Home

```php
public function index()
{
  /** check isset session  */
  $ses  = new \Core\Session;
  if (!$ses->is_logged_in()) {
    redirect('login');
  }

  $this->view('header');
  $this->view('home');
  $this->view('footer');
}
```

# template file License

## License &copy;

- Copyright © [ThemeSelection](https://themeselection.com/)
- Licensed under [MIT](LICENSE)
- All our free items are Open Source and licensed under MIT. You can use our free items for personal as well as commercial purposes. We just need an attribution from your end. Copy the below link and paste it at the footer of your web application or project.

  ```html
  <a href="https://themeselection.com/">ThemeSelection</a>
  ```

  [Demo](https://themeselection.com/demo/sneat-bootstrap-html-admin-template-free/html/)
