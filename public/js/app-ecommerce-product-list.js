"use strict";
$(function () {
    let e, n, a;
    a = (isDarkStyle ? (e = config.colors_dark.borderColor, n = config.colors_dark.bodyBg, config.colors_dark) : (e = config.colors.borderColor, n = config.colors.bodyBg, config.colors)).headingColor;
    var t = $(".datatables-products"),
        s = {
            1: {
                title: "Scheduled",
                class: "bg-label-warning"
            },
            2: {
                title: "Publish",
                class: "bg-label-success"
            },
            3: {
                title: "Inactive",
                class: "bg-label-danger"
            }
        },
        i = {
            0: {
                title: "Household"
            },
            1: {
                title: "Office"
            },
            2: {
                title: "Electronics"
            },
            3: {
                title: "Shoes"
            },
            4: {
                title: "Accessories"
            },
            5: {
                title: "Game"
            }
        },
        o = {
            0: {
                title: "Out_of_Stock"
            },
            1: {
                title: "In_Stock"
            }
        },
        r = {
            0: {
                title: "Out of Stock"
            },
            1: {
                title: "In Stock"
            }
        };
    t.length && (t.DataTable({
        ajax: assetsPath + "json/ecommerce-product-list.json",
        columns: [{
            data: "id"
        }, {
            data: "id"
        }, {
            data: "product_name"
        }, {
            data: "category"
        }, {
            data: "stock"
        }, {
            data: "sku"
        }, {
            data: "price"
        }, {
            data: "quantity"
        }, {
            data: "status"
        }, {
            data: ""
        }],
        columnDefs: [{
            className: "control",
            searchable: !1,
            orderable: !1,
            responsivePriority: 2,
            targets: 0,
            render: function (t, e, n, a) {
                return ""
            }
        }, {
            targets: 1,
            orderable: !1,
            checkboxes: {
                selectAllRender: '<input type="checkbox" class="form-check-input">'
            },
            render: function () {
                return '<input type="checkbox" class="dt-checkboxes form-check-input" >'
            },
            searchable: !1
        }, {
            targets: 2,
            responsivePriority: 1,
            render: function (t, e, n, a) {
                var s = n.product_name,
                    i = n.id,
                    o = n.product_brand,
                    r = n.image;
                return '<div class="d-flex justify-content-start align-items-center product-name"><div class="avatar-wrapper me-3"><div class="avatar rounded-3 bg-label-secondary">' + (r ? '<img src="' + assetsPath + "img/ecommerce-images/" + r + '" alt="Product-' + i + '" class="rounded-2">' : '<span class="avatar-initial rounded-2 bg-label-' + ["success", "danger", "warning", "info", "dark", "primary", "secondary"][Math.floor(6 * Math.random())] + '">' + (r = (((r = (s = n.product_brand).match(/\b\w/g) || []).shift() || "") + (r.pop() || "")).toUpperCase()) + "</span>") + '</div></div><div class="d-flex flex-column"><span class="text-nowrap text-heading fw-medium">' + s + '</span><small class="text-truncate d-none d-sm-block">' + o + "</small></div></div>"
            }
        }, {
            targets: 3,
            responsivePriority: 5,
            render: function (t, e, n, a) {
                n = i[n.category].title;
                return "<h6 class='text-truncate d-flex align-items-center mb-0 fw-normal'>" + {
                    Household: '<span class="avatar-sm rounded-circle d-flex justify-content-center align-items-center bg-label-warning me-3"><i class="ri-home-6-line"></i></span>',
                    Office: '<span class="avatar-sm rounded-circle d-flex justify-content-center align-items-center bg-label-success me-3"><i class="ri-briefcase-line"></i></span>',
                    Electronics: '<span class="avatar-sm rounded-circle d-flex justify-content-center align-items-center bg-label-primary me-3"><i class="ri-smartphone-line"></i></span>',
                    Shoes: '<span class="avatar-sm rounded-circle d-flex justify-content-center align-items-center bg-label-info me-3"><i class="ri-footprint-line"></i></span>',
                    Accessories: '<span class="avatar-sm rounded-circle d-flex justify-content-center align-items-center bg-label-secondary me-3"><i class="ri-headphone-line"></i></span>',
                    Game: '<span class="avatar-sm rounded-circle d-flex justify-content-center align-items-center bg-label-dark me-3"><i class="ri-gamepad-line"></i></span>'
                } [n] + n + "</h6>"
            }
        }, {
            targets: 4,
            orderable: !1,
            responsivePriority: 3,
            render: function (t, e, n, a) {
                n = n.stock;
                return "<span class='text-truncate'>" + {
                    Out_of_Stock: '<label class="switch switch-primary switch-sm"><input type="checkbox" class="switch-input" id="switch"><span class="switch-toggle-slider"><span class="switch-off"></span></span></label>',
                    In_Stock: '<label class="switch switch-primary switch-sm"><input type="checkbox" class="switch-input" checked=""><span class="switch-toggle-slider"><span class="switch-on"></span></span></label>'
                } [o[n].title] + '<span class="d-none">' + o[n].title + "</span></span>"
            }
        }, {
            targets: 5,
            render: function (t, e, n, a) {
                return "<span>" + n.sku + "</span>"
            }
        }, {
            targets: 6,
            render: function (t, e, n, a) {
                return "<span>" + n.price + "</span>"
            }
        }, {
            targets: 7,
            responsivePriority: 4,
            render: function (t, e, n, a) {
                return "<span>" + n.qty + "</span>"
            }
        }, {
            targets: -2,
            render: function (t, e, n, a) {
                n = n.status;
                return '<span class="badge rounded-pill ' + s[n].class + '" text-capitalized>' + s[n].title + "</span>"
            }
        }, {
            targets: -1,
            title: "Actions",
            searchable: !1,
            orderable: !1,
            render: function (t, e, n, a) {
                return '<div class="d-inline-block text-nowrap"><button class="btn btn-sm btn-icon btn-text-secondary waves-effect waves-light rounded-pill me-50"><i class="ri-edit-box-line ri-20px"></i></button><button class="btn btn-sm btn-icon btn-text-secondary waves-effect waves-light rounded-pill dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="ri-more-2-line ri-20px"></i></button><div class="dropdown-menu dropdown-menu-end m-0"><a href="javascript:0;" class="dropdown-item">View</a><a href="javascript:0;" class="dropdown-item">Suspend</a></div></div>'
            }
        }],
        order: [2, "asc"],
        dom: '<"card-header d-flex border-top rounded-0 flex-wrap pb-md-0 pt-0"<"me-5 ms-n2"f><"d-flex justify-content-start justify-content-md-end align-items-baseline"<"dt-action-buttons d-flex align-items-start align-items-md-center justify-content-sm-center gap-4"lB>>>t<"row mx-1"<"col-sm-12 col-md-6"i><"col-sm-12 col-md-6"p>>',
        lengthMenu: [7, 10, 20, 50, 70, 100],
        language: {
            sLengthMenu: "_MENU_",
            search: "",
            searchPlaceholder: "Search",
            info: "Displaying _START_ to _END_ of _TOTAL_ entries"
        },
        buttons: [{
            extend: "collection",
            className: "btn btn-outline-secondary dropdown-toggle me-4 waves-effect waves-light",
            text: '<i class="ri-upload-2-line ri-16px me-2"></i><span class="d-none d-sm-inline-block">Export </span>',
            buttons: [{
                extend: "print",
                text: '<i class="ri-printer-line me-1" ></i>Print',
                className: "dropdown-item",
                exportOptions: {
                    columns: [1, 2, 3, 4, 5],
                    format: {
                        body: function (t, e, n) {
                            var a;
                            return t.length <= 0 ? t : (t = $.parseHTML(t), a = "", $.each(t, function (t, e) {
                                void 0 !== e.classList && e.classList.contains("product-name") ? a += e.lastChild.firstChild.textContent : void 0 === e.innerText ? a += e.textContent : a += e.innerText
                            }), a)
                        }
                    }
                },
                customize: function (t) {
                    $(t.document.body).css("color", a).css("border-color", e).css("background-color", n), $(t.document.body).find("table").addClass("compact").css("color", "inherit").css("border-color", "inherit").css("background-color", "inherit")
                }
            }, {
                extend: "csv",
                text: '<i class="ri-file-text-line me-1" ></i>Csv',
                className: "dropdown-item",
                exportOptions: {
                    columns: [1, 2, 3, 4, 5],
                    format: {
                        body: function (t, e, n) {
                            var a;
                            return t.length <= 0 ? t : (t = $.parseHTML(t), a = "", $.each(t, function (t, e) {
                                void 0 !== e.classList && e.classList.contains("product-name") ? a += e.lastChild.firstChild.textContent : void 0 === e.innerText ? a += e.textContent : a += e.innerText
                            }), a)
                        }
                    }
                }
            }, {
                extend: "excel",
                text: '<i class="ri-file-excel-line me-1"></i>Excel',
                className: "dropdown-item",
                exportOptions: {
                    columns: [1, 2, 3, 4, 5],
                    format: {
                        body: function (t, e, n) {
                            var a;
                            return t.length <= 0 ? t : (t = $.parseHTML(t), a = "", $.each(t, function (t, e) {
                                void 0 !== e.classList && e.classList.contains("product-name") ? a += e.lastChild.firstChild.textContent : void 0 === e.innerText ? a += e.textContent : a += e.innerText
                            }), a)
                        }
                    }
                }
            }, {
                extend: "pdf",
                text: '<i class="ri-file-pdf-line me-1"></i>Pdf',
                className: "dropdown-item",
                exportOptions: {
                    columns: [1, 2, 3, 4, 5],
                    format: {
                        body: function (t, e, n) {
                            var a;
                            return t.length <= 0 ? t : (t = $.parseHTML(t), a = "", $.each(t, function (t, e) {
                                void 0 !== e.classList && e.classList.contains("product-name") ? a += e.lastChild.firstChild.textContent : void 0 === e.innerText ? a += e.textContent : a += e.innerText
                            }), a)
                        }
                    }
                }
            }, {
                extend: "copy",
                text: '<i class="ri-file-copy-line me-1"></i>Copy',
                className: "dropdown-item",
                exportOptions: {
                    columns: [1, 2, 3, 4, 5],
                    format: {
                        body: function (t, e, n) {
                            var a;
                            return t.length <= 0 ? t : (t = $.parseHTML(t), a = "", $.each(t, function (t, e) {
                                void 0 !== e.classList && e.classList.contains("product-name") ? a += e.lastChild.firstChild.textContent : void 0 === e.innerText ? a += e.textContent : a += e.innerText
                            }), a)
                        }
                    }
                }
            }]
        }, {
            text: '<i class="ri-add-line ri-16px me-0 me-sm-2 align-baseline"></i><span class="d-none d-sm-inline-block">Add Product</span>',
            className: "add-new btn btn-primary waves-effect waves-light",
            action: function () {
                window.location.href = "ecommerce-product-add"
            }
        }],
        responsive: {
            details: {
                display: $.fn.dataTable.Responsive.display.modal({
                    header: function (t) {
                        return "Details of " + t.data().product_name
                    }
                }),
                type: "column",
                renderer: function (t, e, n) {
                    n = $.map(n, function (t, e) {
                        return "" !== t.title ? '<tr data-dt-row="' + t.rowIndex + '" data-dt-column="' + t.columnIndex + '"><td>' + t.title + ":</td> <td>" + t.data + "</td></tr>" : ""
                    }).join("");
                    return !!n && $('<table class="table"/><tbody />').append(n)
                }
            }
        },
        initComplete: function () {
            this.api().columns(-2).every(function () {
                var e = this,
                    n = $('<select id="ProductStatus" class="form-select text-capitalize"><option value="">Status</option></select>').appendTo(".product_status").on("change", function () {
                        var t = $.fn.dataTable.util.escapeRegex($(this).val());
                        e.search(t ? "^" + t + "$" : "", !0, !1).draw()
                    });
                e.data().unique().sort().each(function (t, e) {
                    n.append('<option value="' + s[t].title + '">' + s[t].title + "</option>")
                })
            }), this.api().columns(3).every(function () {
                var e = this,
                    n = $('<select id="ProductCategory" class="form-select text-capitalize"><option value="">Category</option></select>').appendTo(".product_category").on("change", function () {
                        var t = $.fn.dataTable.util.escapeRegex($(this).val());
                        e.search(t ? "^" + t + "$" : "", !0, !1).draw()
                    });
                e.data().unique().sort().each(function (t, e) {
                    n.append('<option value="' + i[t].title + '">' + i[t].title + "</option>")
                })
            }), this.api().columns(4).every(function () {
                var e = this,
                    n = $('<select id="ProductStock" class="form-select text-capitalize"><option value=""> Stock </option></select>').appendTo(".product_stock").on("change", function () {
                        var t = $.fn.dataTable.util.escapeRegex($(this).val());
                        e.search(t ? "^" + t + "$" : "", !0, !1).draw()
                    });
                e.data().unique().sort().each(function (t, e) {
                    n.append('<option value="' + o[t].title + '">' + r[t].title + "</option>")
                })
            })
        }
    }), $(".dt-action-buttons").addClass("pt-0"), $(".dt-buttons").addClass("d-flex flex-wrap"))
});
