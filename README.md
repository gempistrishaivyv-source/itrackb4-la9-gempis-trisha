# ITRACKB4 LA7 - Shoe Collection

## Q1. What is the difference between POST and GET, and what happens when you refresh after a POST?

GET is used when we want to request or view a page, while POST is used when we send data from a form. In this activity, the shoe form uses POST because it sends a new shoe to the controller. After the shoe is saved, the controller redirects to the shoe list. This prevents the browser from submitting the same POST again when the page is refreshed.

## Q2. What happens when validation fails, and why does the save code not run?

When validation fails, Laravel returns the user to the form and shows the errors. The values entered in the form can still be shown using old(). The save part of the store method does not continue because the validation did not pass. This prevents an invalid shoe record from being saved to the JSON file.

## Q3. Why does the success message appear once even though the layout is shown on every page?

The success message is stored as a session flash message after a shoe is saved. The layout checks the session and displays the message when it is available. After the message is shown, the flash message is removed from the session. This is why the message can appear once even though the layout is used on every page.

## Author

Trisha Ivy Gempis