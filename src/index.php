<?php

/**
 * @api {get} /users/:user_id Request User Information
 * @apiVersion 0.1.0
 * @apiName GetUser2
 * @apiGroup User
 * @apiPermission admin

 * @apiDescription API to get the user information.

 * @apiExample Example usage:
 * curl -i http://localhost:5000/users/2

 * @apiParam {Number} user_id The user's unique ID.

 * @apiSuccess {String} name Name of the User.
 * @apiSuccessExample {json} Success-Response:
 * HTTP/1.1 200 OK
 * {
 * "name": "Tom"
 * }

 * @apiError UserNotFound The <code>user_id< /code> of the User was not found.

 * @apiErrorExample {json} Error-Response:
 * HTTP/1.1 404 Not Found
 * {
 * "error": "UserNotFound",
 * "message": "User {user_id} doesn't exist"
 * }

 * @apiSampleRequest http://localhost:5000/users/:user_id
 */
    function get() {

    }

/**
 * @api {post} /users/:user_id Request User Information2
 * @apiVersion 0.1.0
 * @apiName GetUser
 * @apiGroup User
 *
 *
 *
 */
function post(){

}


/**
 * @api {post} /users/:user_id Request User Information
 * @apiVersion 0.1.0
 * @apiName GetUser
 * @apiGroup User2
 *
 *
 *
 */
    function post(){

    }





