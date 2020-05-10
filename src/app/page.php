<?php
/*
 * David Bray
 * BrayWorth Pty Ltd
 * e. david@brayworth.com.au
 *
 * MIT License
 *
*/

namespace pages;

class page {
    protected $_closed = false;
    protected $_title = false;

    function __construct( string $title = 'I am a page') {

        $this->_title = $title;

    }

    function __destruct() {
        $this->close();

    }

    function close() {
        if ( $this->_closed) return;

        $this->_closed = true;

        print "\n<!-- end of page -->\n";

        print '
                </div><!-- close bootstrap container -->

            </body>

        </html>';


    }

    function open() {

        // https://getbootstrap.com/docs/4.4/getting-started/introduction/
        printf( '<!doctype html>
        <html lang="en">
            <head>
                <!-- Required meta tags -->
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

                <!-- Bootstrap CSS -->
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

                <title>%s</title>
            </head>
            <body>
                <div class="container"><!-- open bootstrap container -->', $this->_title);

        print "\n<!-- start of page -->\n";

    }

}
