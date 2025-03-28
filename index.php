<?php
session_start();
$config = require_once 'src/config.php';
require_once ROOT_PATH . 'src/functions.php';
require_once ROOT_PATH . 'src/db.php';

if (isset($_GET['page'])) {
    switch ($_GET['page']) {
        case 'home':
            require_once 'views/website/home.php';
            break;
        case 'about':
            require_once 'views/website/about.php';
            break;
        case 'contact':
            require_once 'views/website/contact.php';
            break;
        case "shop":
            require_once 'views/website/shop.php';
            break;
        case "cart":
            require_once 'views/website/cart.php';
            break;
        case 'account_details':
            require_once 'views/website/account_details.php';
            break;
        case 'edit-user':
            require_once 'controllers/edit-user.php';
            break;
        case 'edit-password':
            require_once 'controllers/edit-password.php';
            break;
        case 'account':
            require_once 'views/website/account.php';
            break;
        case 'send-user':
            require_once 'controllers/send-user.php';
            break;
        case 'send-message':
            require_once 'controllers/send-message.php';
            break;
        case 'delete-message':
            require_once 'controllers/dashboard/delete-message.php';
            break;
        case 'login':
            require_once 'controllers/login.php';
            break;
        case 'logout':
            require_once 'controllers/logout.php';
            break;
        case 'resetpassword':
                require_once 'controllers/resetpassword.php';
                break;
        case 'update-password':
                require_once 'controllers/update-password.php';
                break;
        case 'branches':
            require_once 'views/website/branches.php';
            break;
        case 'checkout':
            require_once 'views/website/checkout.php';
            break;
        case 'favourites':
            require_once 'views/website/favourites.php';
            break;
        case 'orders':
            require_once 'views/website/orders.php';
            break;
        case 'order_details':
            require_once 'views/website/order-details.php';
            break;
        case 'order_recieved':
            require_once 'views/website/order-recieved.php';
            break;
        case 'privacy_policy':
            require_once 'views/website/privacy-policy.php';
            break;
        case 'profile':
            require_once 'views/website/profile.php';
            break;
        case 'refund_policy':
            require_once 'views/website/refund-policy.php';
            break;
        case 'single_product':
            require_once 'views/website/single-product.php';
            break;
        case 'track_order':
            require_once 'views/website/track-order.php';
            break;
            //dashboard home page
        case 'dashboard':
            require_once 'views/dashboard/index.php';
            break;
            //books
        case 'books':
            require_once 'views/dashboard/books/showAll.php';
            break;
        case 'add-book':
            require_once 'views/dashboard/books/addBook.php';
            break;
        case 'update-book':
            require_once 'views/dashboard/books/updateBook.php';
            break;
        case 'store-book':
            require_once 'controllers/dashboard/books/add.php';
            break;
        case 'edit-book':
            require_once 'controllers/dashboard/books/edit.php';
            break;
        case 'delete-book':
            require_once 'controllers/dashboard/books/delete.php';
            break;
        case 'book-lang':
            require_once 'views/dashboard/books/add_lang.php';
            break;
        case 'store-lang':
            require_once 'controllers/dashboard/books/addLang.php';
            break;
        case 'view-order':
            require_once 'views/dashboard/orders/view-order.php';
            break;
        case 'process-order':
            require_once 'controllers/dashboard/orders/process-order.php';
            break;
        case 'deliver-order':
            require_once 'controllers/dashboard/orders/deliver-order.php';
            break;
            //categories
        case 'store-cat':
            require_once 'controllers/dashboard/categories/store-cat.php';
            break;
        case 'cat-delete':
            require_once 'controllers/dashboard/categories/cat-delete.php';
            break;
        case 'cat-edit':
            require_once 'controllers/dashboard/categories/cat-edit.php';
            break;
        case 'add_category':
            require_once 'views/dashboard/categories/add_category.php';
            break;
        case 'edit-cat':
            require_once 'views/dashboard/categories/edit-cat.php';
            break;
        case 'categories':
            require_once 'views/dashboard/categories/showAll.php';
            break;
            //Authors
        case 'authors':
            require_once 'views/dashboard/authors/show_author.php';
            break;
        case 'add-author':
            require_once 'views/dashboard/authors/add_author.php';
            break;
        case 'update-author':
            require_once 'views/dashboard/authors/update_author.php';
            break;
        case 'store-author':
            require_once 'controllers/dashboard/authors/addAuth.php';
            break;
        case 'edit-author':
            require_once 'controllers/dashboard/authors/editAuth.php';
            break;
        case 'delete-author':
            require_once 'controllers/dashboard/authors/deleteAuth.php';
            break;
            //users
        case 'users':
            require_once 'views/dashboard/show-users.php';
            break;
        case 'delete-user':
            require_once 'controllers/dashboard/delete-user.php';
            break;
            //messages
        case 'messages':
            require_once 'views/dashboard/show-messages.php';
            break;
            //orders
        case 'allOrders':
            require_once 'views/dashboard/show-orders.php';
            break;
            //cart
        case 'add-cart':
            require_once 'controllers/cart/add.php';
            break;
        case 'remove':
            require_once 'controllers/cart/remove.php';
            break;
        case 'add-order':
            require_once 'controllers/orders/add.php';
            break;
            //favourites
        case 'add-favourites':
            require_once 'controllers/favourites/add.php';
            break;
        case 'remove-favourites':
            require_once 'controllers/favourites/remove.php';
            break;
        case 'logout-dashboard':
            require_once 'controllers/dashboard/logout.php';
            break;
        case 'login-dashboard':
            require_once 'views/website/login-dashboard.php';
            break;
        case 'login-fn-dashboard':
            require_once 'controllers/website/login.php';
            break;
            //not found
        default:
            require_once 'views/website/404.php';
    }
} else {
    require_once 'views/website/home.php';
}
