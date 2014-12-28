<?php

function real_name($username)
{
//    $username = str_replace('.', ' ', $username);
//    $username = ucfirst($username);

    // explode the username on the dot into an array
    // and assign variable to the first and second result
    list($firstname, $lastname) = explode('.', $username);

    // return uppercase first full name
    return ucfirst($firstname) . ' ' . ucfirst($lastname);
}

/**
 * Find the user(s) by name
 *
 * @param string $name
 * @return array
 */
function user_find_by_name($name)
{
    // get the global user list
    global $users;

    // create new empty result array
    $result = [];

    // loop through all users
    foreach ($users as $user)
    {
        // if the string position is not false (meaning found) add
        // the user to the result array
        if (strpos($user['name'], $name) !== false)
        {
            $result[] = $user;
        }
    }

    // check if there are more than one result
    if (count($result) > 1)
    {
        return $result;
    }
    // return only the single result
    else
    {
        return $result[0];
    }
}