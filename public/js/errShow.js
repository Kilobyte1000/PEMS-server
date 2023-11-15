let params = new URLSearchParams(location.search)
if (params.get('err') != null) {
    document.getElementById('main').style.alignSelf='baseline'

    p = document.getElementById('errPara');


    switch (params.get('err')) {
        case '1': // Provided Data does not match with data in database
            p.innerText = "The provided data is incorrect. Please try again"
            break

        case '2': //Provided Admission no. is not found in the database
            p.innerText = "The provided Admission no. was not found"
            break

        case '3': // Users has already voted
            p.innerText = "The provided Admission no. has already voted"
            break

        case '4': //data validation failed
            p.innerText = "Please ensure all fields are filled and fulfill the requirements"
            break;

        default: // Warn to stop them playing around with my webpage
            p.innerText = "You should not be fiddling around with this webpage"
    }
}
