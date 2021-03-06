const getAllEmployeesUrl = "dashboard/getAllEmployees";

function previousFolder(path) {
  return path.substring(0, path.lastIndexOf("/"));
}

const getEmployees = async () => {
  try {
    const response = await fetch(getAllEmployeesUrl);
    const data = await response.json();
    return data;
  } catch (error) {
    console.error(error);
  }
};

const deleteEmployee = async (item) => {
  try {
    const response = await fetch(`dashboard/deleteEmployee/${item.id}`);
    const data = await response.text();
  } catch (error) {
    console.error(error);
  }
};

const updateEmployee = async (item) => {
  try {
    const response = await fetch(`dashboard/updateEmployee`, {
      method: "POST",
      body: JSON.stringify(item),
    });
  } catch (error) {
    console.error(error);
  }
};

const insertEmployee = async (item) => {
  try {
    const response = await fetch(`dashboard/insertEmployee`, {
      method: "POST",
      body: JSON.stringify(item),
    });
  } catch (error) {
    console.error(error);
  }
};

const configFields = [{
    name: "id",
    title: "ID",
},
{
    name: "name",
    title: "Name",
    type: "text",
    headercss: "table-header",
    css: "table-row",
    width: 40,
    validate: "required",
},
{
    name: "lastname",
    title: "Lastname",
    type: "text",
    headercss: "table-header",
    css: "table-row",
    width: 40,
    validate: "required",
},
{
    name: "email",
    title: "Email",
    type: "text",
    headercss: "table-header",
    css: "table-row",
    width: 70,
    validate: "required",
},
{
    name: "gender",
    title: "Gender",
    type: "select",
    items: [
        {name: '', id: ''},
        {name: "Man", id: "man"},
        {name: "Woman", id: "woman"}
    ],
    headercss: "table-header",
    css: "table-row",
    selectedIndex: -1,
    valueField: "id",
    textField: "name",
    validate: "required",
    width: 40
},
{
    name: "age",
    title: "Age",
    type: "number",
    headercss: "table-header",
    css: "table-row",
    width: 25,
    validate: function (age) {
        if (age > 0) {
            return true;
        }
    },
},
{
    name: "streetaddress",
    title: "Street address",
    type: "text",
    headercss: "table-header",
    css: "table-row",
    width: 75,
},
{
    name: "city",
    title: "City",
    type: "text",
    headercss: "table-header",
    css: "table-row",
    width: 40,
},
{
    name: "state",
    title: "State",
    type: "text",
    headercss: "table-header",
    css: "table-row",
    width: 35,
},
{
    name: "postalcode",
    title: "Postal code",
    type: "number",
    headercss: "table-header",
    css: "table-row",
    width: 30,
},
{
    name: "phonenumber",
    title: "Phone number",
    type: "number",
    headercss: "table-header",
    css: "table-row",
    width: 45,
},
{
    type: "control",
    headercss: "table-header",
    css: "table-row",
    width: 20,
},
]

$("#jsGrid").jsGrid({
  width: "85%",
  height: "auto",
  inserting: true,
  editing: true,
  sorting: true,
  paging: true,
  autoload: true,
  pageSize: 8,
  pageButtonCount: 5,
  deleteConfirm: "Do you really want to delete data?",
  controller: {

    loadData: getEmployees,

    deleteItem: deleteEmployee,

    updateItem: updateEmployee,

    insertItem: insertEmployee,

  },

    fields: configFields,
    /* Redirects to the employee page with the employee's data. */
    rowClick: function (data) {
        location.href = `dashboard/showEmployee/${data.item.id}`;
    },
 
  /* Redirects to the employee page with the employee's data. */
  onItemUpdated: function () {
    let toast = document.getElementById("update-toast");
    toast.classList.remove("toast");
    setTimeout(() => {
      toast.classList.add("toast");
    }, 3000);
  },

  /* Displays a message when deleting employee data */
  onItemDeleted: function () {
    let toast = document.getElementById("delete-toast");
    toast.classList.remove("toast");
    setTimeout(() => {
      toast.classList.add("toast");
    }, 3000);
  }
})

/* Hide the id field */
$("#jsGrid").jsGrid("fieldOption", "id", "visible", false);

const editBtn = document.getElementById("editBtn");
editBtn.addEventListener("click", successUpdate());

/* Function to display a message when updating employee data */
function successUpdate() {
  const div = document.getElementById("success");
  if (div) {
    let success = "<b>Success!</b> Employee added successfully";
    div.innerHTML = success;
    setTimeout(() => {
      div.remove();
    }, 3000);
  }
}
