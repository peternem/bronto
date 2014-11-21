<?php
    /* This file defines the database settings. It can be included in all your php scripts that interact with
     * your database. Then if you need to change the dbpasswd or the databaseServer, etc you will only have to change it once
     */

    /* define some parameters for the connection */
    $databaseServer="mysql.brontobikes.com";    /* specfies the database server. Can be changed if the database moves */
    $dbuser="jacklin";                       /* specfies a username to log on to the database with. */
    $dbpasswd="jacklin";                     /* specfies a password for the username. */
    $database="bronto_marketing";                   /* specfies the database on the server you wish to connect to. */

    /* NOTE: in this case user and database are set to
     * the same value. This is for simplicity, but it won't
     * always be the case when using databases on other servers.
     */
?> 