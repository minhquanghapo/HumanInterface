const ID_ROLE_USER_CHECKBOX = 'role-user-checkbox';
const DEFAULT_USER_ROLE = getRoleUser(ID_ROLE_USER_CHECKBOX);
const FIRST_FORM_VISIABLE = setFormVisiable(DEFAULT_USER_ROLE);
const LIST_FORM_CLASS = '.dynamic-form .box-body';

// Get role user
function getRoleUser(idRoleUserCheckbox) {
    const role = $(`#${idRoleUserCheckbox}`).val();
    return role;
}

// Set form visiable
function setFormVisiable(idForm) {
    $(`#${idForm}`).css('display', 'block');
}

// Set from hidden
function setFormHidden(idForm) {
    $(`#${idForm}`).css('display', 'none');
}

// Change Form
function changeFormByRole() {
    $(`#${ID_ROLE_USER_CHECKBOX}`).change(function () {
        const CURRENT_ROLE = $(this).val();
        const LIST_FORM_HIDDEN = $(LIST_FORM_CLASS);      
        
        setFormVisiable($(this).val());
        $.each(LIST_FORM_HIDDEN, (index, element) => {
            if ($(element).attr('id') != CURRENT_ROLE) {
                setFormHidden($(element).attr('id'));
            }
        });
    });
}

changeFormByRole();