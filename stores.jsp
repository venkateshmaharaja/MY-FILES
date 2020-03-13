<%-- 
    Document   : stores
    Created on : 5 Mar, 2020, 11:04:22 AM
    Author     : AV-IT-PC428
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="css/cardstyle.css">
        <link rel="stylesheet" type="text/css" href="css/inputstyle.css">
        <link rel="stylesheet" type="text/css" href="css/table.css">
        <link rel="stylesheet" type="text/css" href="css/overflow.css">
        <link rel="stylesheet" type="text/css" href="css/autoexpand.css">
        <title>STORES</title>
        <script src="js/jquery.min.js"></script>
    </head>
    <script>
        function dytxt() {
            //            document.getElementById('memtable').innerHTML="";

            var abc = document.getElementById("nos").value;
            for (var i = 1; i < abc; i++) {
                var x = document.getElementById('memtable');
                var new_row = x.rows[1].cloneNode(true);
                var len = x.rows.length;
                new_row.cells[0].innerHTML = len;
                var inp1 = new_row.cells[1].getElementsByTagName('input')[0];
                inp1.id += len;
                inp1.value = '';
                var inp2 = new_row.cells[2].getElementsByTagName('input')[0];
                inp2.id += len;
                inp2.value = '';
                var inp3 = new_row.cells[3].getElementsByTagName('input')[0];
                inp3.id += len;
                inp3.value = '';
                var inp4 = new_row.cells[4].getElementsByTagName('input')[0];
                inp4.id += len;
                inp4.value = '';
                var inp5 = new_row.cells[5].getElementsByTagName('input')[0];
                inp5.id += len;
                inp5.value = '';
                var inp6 = new_row.cells[6].getElementsByTagName('input')[0];
                inp6.id += len;
                inp6.value = '';
                var inp7 = new_row.cells[7].getElementsByTagName('input')[0];
                inp7.id += len;
                inp7.value = '';
                var inp8 = new_row.cells[8].getElementsByTagName('input')[0];
                inp8.id += len;
                inp8.value = '';
                var inp9 = new_row.cells[9].getElementsByTagName('input')[0];
                inp9.id += len;
                inp9.value = '';
                var inp10 = new_row.cells[10].getElementsByTagName('input')[0];
                inp10.id += len;
                inp10.value = '';
                var inp11 = new_row.cells[11].getElementsByTagName('input')[0];
                inp11.id += len;
                inp11.value = '';
                var inp12 = new_row.cells[12].getElementsByTagName('input')[0];
                inp12.id += len;
                inp12.value = '';
                var inp13 = new_row.cells[13].getElementsByTagName('input')[0];
                inp13.id += len;
                inp13.value = '';
                var inp14 = new_row.cells[14].getElementsByTagName('input')[0];
                inp14.id += len;
                inp14.value = '';
                var inp15 = new_row.cells[15].getElementsByTagName('input')[0];
                inp15.id += len;
                inp15.value = '';
                x.appendChild(new_row);
            }


            var get_id, get_id_value, get_id_value1;
            var xyz = "";
            //            var plant = "", customer_name = "", product_part = "", prod_name = "", production_order = "", lot_no = "", invoice = "", shipment_date = "";
            var rma_no = "", customer_ref = "", prob_description = "", failure_type = "", rma_req_date = "", plant = "", customer_name = "", product_part = "", product_part_name = "", production_order = "", lot_no = "", invoice_no = "", shipment_date = "", status = "";
            $('table tr td:nth-child(2) input').on('focusout', function () {
                get_id = ($(this).attr('id'));
                get_id_value = ($(this).val());
                console.log(get_id);
                console.log(get_id_value);
                var check = "a";
                var abcd;
                var aaa;

                //                for (let i = 1; i <= abc; i++) {
                //                    abcd = check + i;
                //                    aaa = ($('#' + abcd).val());
                //                    alert(aaa);
                //                    if (get_id_value != aaa) {
                //                        


                var totel_data = [];
                var place_data;
//                alert(get_id_value);
                $.ajax({
                    type: "POST",
                    url: "rma_tracker_result.jsp",
                    data: {name: get_id_value},
                    success: function (data) {
//                        alert(data);
                        totel_data = data.split("&");
                        ////                        for (let i = 0; i < totel_data.length - 1; i++) {
                        rma_no = totel_data[0]
                        customer_ref = totel_data[1]
                        prob_description = totel_data[2]
                        failure_type = totel_data[3]
                        rma_req_date = totel_data[4]
                        plant = totel_data[5]
                        customer_name = totel_data[6]
                        product_part = totel_data[7]
                        product_part_name = totel_data[8]
                        production_order = totel_data[9]
                        lot_no = totel_data[10]
                        invoice_no = totel_data[11]
                        shipment_date = totel_data[12]
                        status = totel_data[13]

                        if (get_id.length == 1) {
                            document.getElementById("b").value = rma_no;
                            document.getElementById("c").value = customer_ref;
                            document.getElementById("d").value = prob_description;
                            document.getElementById("e").value = failure_type;
                            document.getElementById("f").value = rma_req_date;
                            document.getElementById("g").value = plant;
                            document.getElementById("h").value = customer_name;
                            document.getElementById("i").value = product_part;
                            document.getElementById("j").value = product_part_name;
                            document.getElementById("k").value = production_order;
                            document.getElementById("l").value = lot_no;
                            document.getElementById("m").value = invoice_no;
                            document.getElementById("n").value = shipment_date;
                            document.getElementById("o").value = status;
                        } else {
                            place_data = get_id.substr(1, 1);
                            var temp = "";
                            temp = 'b' + place_data;
                            document.getElementById(temp).value = rma_no;
                            temp = 'c' + place_data;
                            document.getElementById(temp).value = customer_ref;
                            temp = 'd' + place_data;
                            document.getElementById(temp).value = prob_description;
                            temp = 'e' + place_data;
                            document.getElementById(temp).value = failure_type;
                            temp = 'f' + place_data;
                            document.getElementById(temp).value = rma_req_date;
                            temp = 'g' + place_data;
                            document.getElementById(temp).value = plant;
                            temp = 'h' + place_data;
                            document.getElementById(temp).value = customer_name;
                            temp = 'i' + place_data;
                            document.getElementById(temp).value = product_part;
                            temp = 'j' + place_data;
                            document.getElementById(temp).value = product_part_name;
                            temp = 'k' + place_data;
                            document.getElementById(temp).value = production_order;
                            temp = 'l' + place_data;
                            document.getElementById(temp).value = lot_no;
                            temp = 'm' + place_data;
                            document.getElementById(temp).value = invoice_no;
                            temp = 'n' + place_data;
                            document.getElementById(temp).value = shipment_date;
                            temp = 'o' + place_data;
                            document.getElementById(temp).value = status;
                        }

                    }
                });
                //                    }
                //                    else{
                //                        alert("Please Change the number");
                //                    }
                //                }

            });
        }
    </script>


    <body>
        <jsp:include page="/topnav.jsp"></jsp:include>
        <div class="card-form__inner" >
            <div class="table-wrapper">
                <center>
                    <!--<form method="rmabox_gen" action="">-->
                    <label for="text" style="color:red;font-family: sans-serif">ENTER SERIAL NO COUNT:</label>
                    <input type="text" name="nos" id="nos">
                    <button name="b1" id="b1" onclick="dytxt()">Submit</button>
                    <button name="reset" id="reset">Reset</button>
                    <form method="post" action="insert_stores_rma">
                        <!--/////////dynamic text box open///////////-->
                        <div class="member" style="height: 100%;">
                            <br><br>
                            <table id="memtable">
                                <tr>
                                    <td>Sno</td>
                                    <td>Unit Serial</td>
                                    <td>RMA No</td>
                                    <td>Customer Ref</td>
                                    <td>Problem Desc</td>
                                    <td>Failure Type</td>
                                    <td>RMA Req Date</td>
                                    <td>Plant</td>
                                    <td>Customer Name</td>
                                    <td>Product Part</td>
                                    <td>Product Part name</td>
                                    <td>Production Order</td>
                                    <td>Lot</td>
                                    <td>Invoice</td>
                                    <td>Shipment Date</td>
                                    <td>Status</td>
                                </tr>
                                <tr>
                                    <td   style="width: auto; ">1</td>
                                    <td><input  type="text" class="width-dynamic proba dva"  id="a"  name="a" style="width: auto;"/></td>
                                    <td><input  type="text" id="b" name="b" readonly="" style="width: auto;"/></td>
                                    <td><input  type="text" id="c" name="c" readonly="" style="width:auto;"/></td>
                                    <td><input type="text"  id="d" name="d" readonly="" style="width: auto"/></td>
                                    <td><input  type="text" id="e" name="e" readonly="" style="width: auto;"/></td>
                                    <td><input  type="text" id="f" name="f" readonly="" style="width: auto;"/></td>
                                    <td><input  type="text" id="g" name="g" readonly="" style="width:auto;"/></td>
                                    <td><input  type="text" id="h" name="h" readonly="" style="width: auto;"/></td>
                                    <td><input  type="text" id="i" name="i" readonly="" style="width: auto;"/></td>
                                    <td><input  type="text" id="j" name="j" readonly="" style="width: auto;"/></td>
                                    <td><input  type="text" id="k" name="k" readonly="" style="width: auto;"/></td>
                                    <td><input  type="text" id="l" name="l" readonly="" style="width:auto;"/></td>
                                    <td><input  type="text" id="m" name="m" readonly="" style="width: auto;"/></td>
                                    <td><input  type="text" id="n" name="n" readonly="" style="width: auto;"/></td>
                                    <td><input  type="text" id="o" name="o" readonly="" style="width: auto;"/></td>

                                </tr>
                            </table> 
                            <input type="submit" value="Submit">
                        </div> 
                    </form>
                </center>
            </div></div>
    </body>

</html>
<script>
    $.fn.textWidth = function (text, font) {

        if (!$.fn.textWidth.fakeEl)
            $.fn.textWidth.fakeEl = $('<span>').hide().appendTo(document.body);

        $.fn.textWidth.fakeEl.text(text || this.val() || this.text() || this.attr('placeholder')).css('font', font || this.css('font'));

        return $.fn.textWidth.fakeEl.width();
    };

    $('.width-dynamic').on('input', function () {
        var inputWidth = $(this).textWidth();
        $(this).css({
            width: inputWidth
        })
    }).trigger('input');


    function inputWidth(elem, minW, maxW) {
        elem = $(this);
        console.log(elem)
    }

    var targetElem = $('.width-dynamic');

    inputWidth(targetElem);
</script>
</html>
