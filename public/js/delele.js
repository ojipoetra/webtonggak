let iddelete = document.getElementById("delete");
iddelete.addEventListener("click", () => {
    let fileid = Attribute("data-fileid");
    Swall({
        title: "Are you sure?",
        text: "Once deleted, you will not be able to recover this imaginary file!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    }).then((willDelete) => {
        if (willDelete) {
            fetch("/delete", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                    },
                    body: JSON.stringify({
                        id: fileid,
                    }),
                }).then((response) => response.json())
                .then((result) => {
                    if (result.status) {
                        Swal("Poof! Your imaginary file has been deleted!", {
                            icon: "success",
                        });
                        setTimeout(() => {
                            location.assign("/");
                        }, 1000);
                    } else {
                        Swal("Something went wrong!", {
                            icon: "error",
                        });
                    }
                });
        } else {
            Swal("Your imaginary file is safe!");
        }
    })
})
// Path: public/js/update.js
