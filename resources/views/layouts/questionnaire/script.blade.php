<script>
    function changePageHandle(pageNumber) {
        // รีเซ็ตการแสดงผลทุกหน้า
        document.getElementById("page-1").classList.remove("active");
        document.getElementById("page-2").classList.remove("active");
        document.getElementById("page-3").classList.remove("active");

        // แสดงหน้าที่เลือก
        if (pageNumber === 1) {
            document.getElementById("page-1").classList.add("active");
        } else if (pageNumber === 2) {
            document.getElementById("page-2").classList.add("active");
        } else if (pageNumber === 3) {
            document.getElementById("page-3").classList.add("active");
        }
    }

    // ซ่อนปุ่ม input ของข้อ 2.1.1
    function toggleFields(selection) {
        const additionalFields = document.getElementById('additionalFields');
        const externalField = document.getElementById('externalField');
        const internalInput = document.getElementById('receive_detail_internal');
        const externalInput = document.getElementById('receive_detail_external');
        const admitDateInput = document.querySelector('input[name="admit_date"]'); // อ้างถึง input date

        // ล้างค่าของ input text และ input date ทุกครั้งก่อนแสดงหรือซ่อน
        internalInput.value = '';
        externalInput.value = '';
        if (admitDateInput) admitDateInput.value = ''; // ล้างค่า input date

        if (selection === 'internal') {
            additionalFields.style.display = 'block';
            externalField.style.display = 'none';
            internalInput.disabled = false; // เปิดให้ส่งค่า
            externalInput.disabled = true; // ปิดการส่งค่า
        } else if (selection === 'external') {
            additionalFields.style.display = 'none';
            externalField.style.display = 'block';
            internalInput.disabled = true;
            externalInput.disabled = false;
        } else {
            additionalFields.style.display = 'none';
            externalField.style.display = 'none';
            internalInput.disabled = true;
            externalInput.disabled = true;
        }
    }
    // ซ่อนปุ่ม input ของหัวข้อ 2.1.2
    function hideAllFields2() {
        // ซ่อนทุกฟิลด์ textField และล้างค่า input ภายในฟิลด์ที่ซ่อน
        const textFields = document.querySelectorAll('[id^="textField"]');
        textFields.forEach(field => {
            field.style.display = 'none';

            // ล้างค่า input ภายในฟิลด์ที่ซ่อน
            const inputs = field.querySelectorAll('input');
            inputs.forEach(input => {
                input.value = ''; // รีเซ็ตค่าใน input
            });
        });

        // ล้างค่า Hidden Field
        const hiddenField = document.getElementById("hiddenField");
        if (hiddenField) {
            hiddenField.value = ""; // ล้างค่า Hidden Field
        }
    }

    function toggleFields2(show, idToShow = null) {
        hideAllFields2(); // ซ่อนฟิลด์อื่นทั้งหมดก่อน
        if (show && idToShow) {
            const fieldToShow = document.getElementById(idToShow);
            if (fieldToShow) {
                fieldToShow.style.display = 'block';
            }
        }
    }

    function updateHiddenField() {
        // คัดลอกค่าจากฟิลด์ที่แสดงอยู่ไปยัง Hidden Field
        const activeInput = document.querySelector(
            'div[id^="textField"][style*="block"] input[name="facts_target_group_detail_temp"]'
        );
        const hiddenField = document.getElementById("hiddenField");
        if (activeInput && hiddenField) {
            hiddenField.value = activeInput.value; // คัดลอกค่าจาก input ที่แสดงอยู่
        }
    }


    // ซ่อนปุ่ม input ของข้อ 2.1.3
    function hideAllFields3() {
         // ซ่อนฟิลด์ทั้งหมด
         const field = document.getElementById('on-3');
         field.style.display = 'none';

         // ล้างค่าของ input text และ radio button ภายในฟิลด์
         const inputs = field.querySelectorAll('input');
         inputs.forEach(input => {
             if (input.type === 'text') {
                 input.value = ''; // ล้างค่า text input
             }
         });
    }

    function toggleFields3(show, idToShow = null) {
        hideAllFields3(); // ซ่อนฟิลด์ทั้งหมดก่อน
        if (show) {
            document.getElementById('on-3').style.display = 'block'; // แสดงฟิลด์ "หน่วยงานภายใน"
        }
    }
    // ซ่อนปุ่ม input ของข้อ 2.1.5
    function hideAllFields4() {
        // ซ่อนฟิลด์ทั้งหมด
        const field = document.getElementById('on-4');
        field.style.display = 'none';

        // ล้างค่าของ input text และ radio button ภายในฟิลด์
        const inputs = field.querySelectorAll('input');
        inputs.forEach(input => {
            if (input.type === 'text') {
                input.value = ''; // ล้างค่า text input
            }
        });
    }

    function toggleFields4(show, idToShow = null) {
        hideAllFields4(); // ซ่อนฟิลด์ทั้งหมดก่อน
        if (show) {
            document.getElementById('on-4').style.display = 'block'; // แสดงฟิลด์ "หน่วยงานภายใน"
        }
    }
    // ซ่อนปุ่ม input ของข้อ 2.1.6
    function hideAllFields5() {
        // ซ่อนฟิลด์ทั้งหมด
        const field = document.getElementById('on-5');
        field.style.display = 'none';

        // ล้างค่าของ input text และ radio button ภายในฟิลด์
        const inputs = field.querySelectorAll('input');
        inputs.forEach(input => {
            if (input.type === 'text') {
                input.value = ''; // ล้างค่า text input
            } else if (input.type === 'radio') {
                input.checked = false; // ยกเลิกการเลือก radio
            }
        });
    }
    function toggleFields5(show) {
        hideAllFields5(); // ซ่อนฟิลด์ทั้งหมดก่อน
        if (show) {
            document.getElementById('on-5').style.display = 'block'; // แสดงฟิลด์ "หน่วยงานภายใน"
        }
    }

    // ซ่อนปุ่ม input ของข้อ 8
    function hideAllFields7() {
       // ซ่อนฟิลด์ทั้งหมด
       const field = document.getElementById('on-6');
       field.style.display = 'none';

       // ล้างค่าของ input text และ radio button ภายในฟิลด์
       const inputs = field.querySelectorAll('input');
       inputs.forEach(input => {
           if (input.type === 'text') {
               input.value = ''; // ล้างค่า text input
           }
       });
    }

    function toggleFields7(show, idToShow = null) {
        hideAllFields7(); // ซ่อนฟิลด์ทั้งหมดก่อน
        if (show) {
            document.getElementById('on-6').style.display = 'block'; // แสดงฟิลด์ "หน่วยงานภายใน"
        }
    }
    // ซ่อนปุ่ม input ของข้อ 9.2
    function hideAllFields8() {
       // ซ่อนฟิลด์ทั้งหมด
       const field = document.getElementById('on-7');
       field.style.display = 'none';

       // ล้างค่าของ input text และ radio button ภายในฟิลด์
       const inputs = field.querySelectorAll('input');
       inputs.forEach(input => {
           if (input.type === 'text') {
               input.value = ''; // ล้างค่า text input
           }
       });
    }

    function toggleFields8(show, idToShow = null) {
        hideAllFields8(); // ซ่อนฟิลด์ทั้งหมดก่อน
        if (show) {
            document.getElementById('on-7').style.display = 'block'; // แสดงฟิลด์ "หน่วยงานภายใน"
        }
    }
</script>
