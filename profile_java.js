function editField(first_name) {
    document.getElementById(first_name).style.display = 'none';
    document.getElementById('edit-' + first_name).style.display = 'inline-block';
}

function saveField(first_name) {
    var newValue = document.getElementById('edit-' + first_name).value;
    
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4) {
            if (xhr.status === 200) {
                document.getElementById(first_name).textContent = newValue;
                
                document.getElementById('edit-' + first_name).style.display = 'none';
                
                document.getElementById(first_name).style.display = 'inline-block';
            } else {
                console.error('Error updating field: ' + first_name);
            }
        }
    };
    
    xhr.open('POST', 'update_profile.php', true);
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhr.send(first_name + '=' + newValue);
}



function editField(last_name) {
    document.getElementById(last_name).style.display = 'none';
    document.getElementById('edit-' + last_name).style.display = 'inline-block';
}

function saveField(last_name) {
    var newValue = document.getElementById('edit-' + last_name).value;

    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4) {
            if (xhr.status === 200) {
                document.getElementById(last_name).textContent = newValue;
                document.getElementById('edit-' + last_name).style.display = 'none';
                document.getElementById(last_name).style.display = 'inline-block';
            } else {
                console.error('Error updating field: ' + last_name);
            }
        }
    };

    xhr.open('POST', 'update_profile.php', true);
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhr.send(last_name + '=' + newValue);
}



function editField(email_address) {
    document.getElementById(email_address).style.display = 'none';
    document.getElementById('edit-' + email_address).style.display = 'inline-block';
}

function saveField(email_address) {
    var newValue = document.getElementById('edit-' + email_address).value;

    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4) {
            if (xhr.status === 200) {
                document.getElementById(email_address).textContent = newValue;
                document.getElementById('edit-' + email_address).style.display = 'none';
                document.getElementById(email_address).style.display = 'inline-block';
            } else {
                console.error('Error updating field: ' + email_address);
            }
        }
    };

    xhr.open('POST', 'update_profile.php', true);
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhr.send(email_address + '=' + newValue);
}


function editField(phone_address) {
    document.getElementById(phone_address).style.display = 'none';
    document.getElementById('edit-' + phone_address).style.display = 'inline-block';
}

function saveField(phone_address) {
    var newValue = document.getElementById('edit-' + phone_address).value;

    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4) {
            if (xhr.status === 200) {
                document.getElementById(phone_address).textContent = newValue;
                document.getElementById('edit-' + phone_address).style.display = 'none';
                document.getElementById(phone_address).style.display = 'inline-block';
            } else {
                console.error('Error updating field: ' + phone_address);
            }
        }
    };

    xhr.open('POST', 'update_profile.php', true);
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhr.send(phone_address + '=' + newValue);
}




function editField(physical_address) {
    document.getElementById(physical_address).style.display = 'none';
    document.getElementById('edit-' + physical_address).style.display = 'inline-block';
}

function saveField(physical_address) {
    var newValue = document.getElementById('edit-' + physical_address).value;

    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4) {
            if (xhr.status === 200) {
                document.getElementById(physical_address).textContent = newValue;
                document.getElementById('edit-' + physical_address).style.display = 'none';
                document.getElementById(physical_address).style.display = 'inline-block';
            } else {
                console.error('Error updating field: ' + physical_address);
            }
        }
    };

    xhr.open('POST', 'update_profile.php', true);
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhr.send(physical_address + '=' + newValue);
}



function editField(next_of_kin) {
    document.getElementById(next_of_kin).style.display = 'none';
    document.getElementById('edit-' + next_of_kin).style.display = 'inline-block';
}

function saveField(next_of_kin) {
    var newValue = document.getElementById('edit-' + next_of_kin).value;

    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4) {
            if (xhr.status === 200) {
                document.getElementById(next_of_kin).textContent = newValue;
                document.getElementById('edit-' + next_of_kin).style.display = 'none';
                document.getElementById(next_of_kin).style.display = 'inline-block';
            } else {
                console.error('Error updating field: ' + next_of_kin);
            }
        }
    };

    xhr.open('POST', 'update_profile.php', true);
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhr.send(next_of_kin + '=' + newValue);
}



function editField(kin_phone_number) {
    document.getElementById(kin_phone_number).style.display = 'none';
    document.getElementById('edit-' + kin_phone_number).style.display = 'inline-block';
}

function saveField(kin_phone_number) {
    var newValue = document.getElementById('edit-' + kin_phone_number).value;

    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4) {
            if (xhr.status === 200) {
                document.getElementById(kin_phone_number).textContent = newValue;
                document.getElementById('edit-' + kin_phone_number).style.display = 'none';
                document.getElementById(kin_phone_number).style.display = 'inline-block';
            } else {
                console.error('Error updating field: ' + kin_phone_number);
            }
        }
    };

    xhr.open('POST', 'update_profile.php', true);
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhr.send(kin_phone_number + '=' + newValue);
}



function editField(postal_address) {
    document.getElementById(postal_address).style.display = 'none';
    document.getElementById('edit-' + postal_address).style.display = 'inline-block';
}

function saveField(postal_address) {
    var newValue = document.getElementById('edit-' + postal_address).value;

    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4) {
            if (xhr.status === 200) {
                document.getElementById(postal_address).textContent = newValue;
                document.getElementById('edit-' + postal_address).style.display = 'none';
                document.getElementById(postal_address).style.display = 'inline-block';
            } else {
                console.error('Error updating field: ' + postal_address);
            }
        }
    };

    xhr.open('POST', 'update_profile.php', true);
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhr.send(postal_address + '=' + newValue);
}



function editField(username) {
    document.getElementById(username).style.display = 'none';
    document.getElementById('edit-' + username).style.display = 'inline-block';
}

function saveField(username) {
    var newValue = document.getElementById('edit-' + username).value;

    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4) {
            if (xhr.status === 200) {
                document.getElementById(username).textContent = newValue;
                document.getElementById('edit-' + username).style.display = 'none';
                document.getElementById(username).style.display = 'inline-block';
            } else {
                console.error('Error updating field: ' + username);
            }
        }
    };

    xhr.open('POST', 'update_profile.php', true);
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhr.send(username + '=' + newValue);
}



function editField(password) {
    document.getElementById(password).style.display = 'none';
    document.getElementById('edit-' + password).style.display = 'inline-block';
}

function saveField(password) {
    var newValue = document.getElementById('edit-' + password).value;

    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4) {
            if (xhr.status === 200) {
                document.getElementById(password).textContent = newValue;
                document.getElementById('edit-' + password).style.display = 'none';
                document.getElementById(password).style.display = 'inline-block';
            } else {
                console.error('Error updating field: ' + password);
            }
        }
    };

    xhr.open('POST', 'update_profile.php', true);
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhr.send(password + '=' + newValue);
}



function editField(role) {
    document.getElementById(role).style.display = 'none';
    document.getElementById('edit-' + role).style.display = 'inline-block';
}

function saveField(role) {
    var newValue = document.getElementById('edit-' + role).value;

    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4) {
            if (xhr.status === 200) {
                document.getElementById(role).textContent = newValue;
                document.getElementById('edit-' + role).style.display = 'none';
                document.getElementById(role).style.display = 'inline-block';
            } else {
                console.error('Error updating field: ' + role);
            }
        }
    };

    xhr.open('POST', 'update_profile.php', true);
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhr.send(role + '=' + newValue);
}
