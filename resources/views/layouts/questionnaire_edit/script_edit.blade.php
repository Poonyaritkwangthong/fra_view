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
        const admitDateInput = document.getElementById('admit_date');

        if (additionalFields && externalField && internalInput && externalInput && admitDateInput) {
            // ล้างค่าของฟิลด์เมื่อเปลี่ยนตัวเลือก
            if (selection === 'internal') {
                additionalFields.style.display = 'block';
                externalField.style.display = 'none';
                internalInput.disabled = false;
                externalInput.disabled = true;

                // ล้างค่าของ external
                externalInput.value = '';
            } else if (selection === 'external') {
                additionalFields.style.display = 'none';
                externalField.style.display = 'block';
                internalInput.disabled = true;
                externalInput.disabled = false;

                // ล้างค่าของ internal
                internalInput.value = '';
                admitDateInput.value = '';
            } else {
                additionalFields.style.display = 'none';
                externalField.style.display = 'none';
                internalInput.disabled = true;
                externalInput.disabled = true;

                // ล้างค่าทั้งหมด
                internalInput.value = '';
                externalInput.value = '';
                admitDateInput.value = '';
            }
        }
    }

    document.addEventListener('DOMContentLoaded', function() {
        const currentValue = "{{ $general_information->finding_facts->receive }}";
        const internalDetail = "{{ $general_information->finding_facts->receive_detail }}";
        const admitDate = "{{ $general_information->finding_facts->admit_date }}";

        // ตั้งค่าฟิลด์ตามค่าเก่า
        const internalInput = document.getElementById('receive_detail_internal');
        const externalInput = document.getElementById('receive_detail_external');
        const admitDateInput = document.getElementById('admit_date');

        if (internalInput) internalInput.value = internalDetail;
        if (admitDateInput) admitDateInput.value = admitDate;
        if (externalInput) externalInput.value = internalDetail;

        // เรียก toggleFields เพื่อกำหนดสถานะเริ่มต้น
        toggleFields(currentValue === 'หน่วยงานภายใน' ? 'internal' : currentValue === 'หน่วยงานภายนอก' ? 'external' : 'none');
    });



    // ซ่อนปุ่ม input ของหัวข้อ 2.1.2
    document.addEventListener('DOMContentLoaded', () => {
        const selectedValue = document.querySelector('input[name="facts_target_group"]:checked')?.value;
        const idMap = {
            "ผู้ป่วยทั่วไป": "textField1",
            "ผู้ป่วยเรื้อรัง": "textField2",
            "OSCC": "textField3",
            "ผู้ติดสารเสพติด": "textField4",
            "ผู้ป่วยจิตเวช": "textField5",
            "ผู้พิการ": "textField6",
        };

        // Show the field with the value if it exists on page load
        if (selectedValue && idMap[selectedValue]) {
            toggleFields2(true, idMap[selectedValue], false);
        }

        // Add event listeners for changes in radio buttons
        const radioButtons = document.querySelectorAll('input[name="facts_target_group"]');
        radioButtons.forEach(radio => {
            radio.addEventListener('change', () => {
                const selectedValue = document.querySelector(
                    'input[name="facts_target_group"]:checked')?.value;
                if (selectedValue && idMap[selectedValue]) {
                    toggleFields2(true, idMap[selectedValue], true);
                }
            });
        });
    });

    function hideAllFields2() {
        const textFields = document.querySelectorAll('[id^="textField"]');
        textFields.forEach(field => {
            // Hide the field
            field.style.display = 'none';
        });
    }

    function toggleFields2(show, idToShow = null, clearValue = false) {
        hideAllFields2(); // Hide all fields
        if (show && idToShow) {
            const fieldToShow = document.getElementById(idToShow);
            if (fieldToShow) {
                fieldToShow.style.display = 'block';
                const input = fieldToShow.querySelector('input');
                if (input && clearValue) {
                    input.value = ''; // Clear value if clearValue is true
                }
            }
        }
    }

    function updateHiddenField() {
        const activeInput = document.querySelector(
            'div[id^="textField"][style*="block"] input[name="facts_target_group_detail_temp"]');
        if (activeInput) {
            document.getElementById("hiddenField").value = activeInput.value;
        }
    }


    // ซ่อนปุ่ม input ของข้อ 2.1.3
    document.addEventListener('DOMContentLoaded', () => {
        const informant = document.querySelector('input[name="informant"]:checked')?.value;
        // ตรวจสอบค่าเริ่มต้น และแสดงข้อมูลตามเงื่อนไข
        toggleFields3(informant === 'ผู้อื่น');

        // เพิ่ม event listener ให้กับ radio group
        const radioButtons = document.querySelectorAll('input[name="informant"]');
        radioButtons.forEach(radio => {
            radio.addEventListener('change', () => {
                const selectedValue = radio.value;

                // ซ่อนหรือแสดงฟิลด์ตามค่าใหม่
                if (selectedValue === 'ผู้อื่น') {
                    toggleFields3(true);
                } else {
                    toggleFields3(false);
                    clearOldData(); // ล้างข้อมูลเมื่อเลือก radio อื่น
                }
            });
        });
    });

    // ฟังก์ชันซ่อนฟิลด์ทั้งหมด
    function hideAllFields3() {
        document.getElementById('on-3').style.display = 'none';
    }

    // ฟังก์ชันแสดงหรือซ่อนฟิลด์
    function toggleFields3(show) {
        hideAllFields3(); // ซ่อนฟิลด์ทั้งหมดก่อน
        if (show) {
            document.getElementById('on-3').style.display = 'block'; // แสดงฟิลด์ "on-3"
        }
    }

    // ฟังก์ชันล้างข้อมูลเก่าในฟิลด์
    function clearOldData() {
        const fieldsToClear = document.querySelectorAll('#on-3 input, #on-3 textarea, #on-3 select');
        fieldsToClear.forEach(field => {
            if (field.type === 'checkbox' || field.type === 'radio') {
                field.checked = false;
            } else {
                field.value = '';
            }
        });
    }
    // ซ่อนปุ่ม input ของข้อ 2.1.5
    document.addEventListener('DOMContentLoaded', () => {
        const sourceOfIncome = document.querySelector('input[name="source_of_income"]:checked')?.value;

        // แสดงข้อมูลเก่าตามเงื่อนไข
        toggleFields4(sourceOfIncome === 'จากผู้อื่น');

        // เพิ่ม event listener ให้กับ radio group
        const radioButtons = document.querySelectorAll('input[name="source_of_income"]');
        radioButtons.forEach(radio => {
            radio.addEventListener('change', () => {
                const selectedValue = radio.value;

                // ซ่อนหรือแสดงฟิลด์ตามค่าใหม่
                if (selectedValue === 'จากผู้อื่น') {
                    toggleFields4(true);
                } else {
                    toggleFields4(false);
                    clearOldData4(); // ล้างข้อมูลเมื่อเลือก radio อื่น
                }
            });
        });
    });

    // ฟังก์ชันซ่อนฟิลด์ทั้งหมด
    function hideAllFields4() {
        document.getElementById('on-4').style.display = 'none';
    }

    // ฟังก์ชันแสดงหรือซ่อนฟิลด์
    function toggleFields4(show) {
        hideAllFields4(); // ซ่อนฟิลด์ทั้งหมดก่อน
        if (show) {
            document.getElementById('on-4').style.display = 'block'; // แสดงฟิลด์ "on-4"
        }
    }

    // ฟังก์ชันล้างข้อมูลเก่าในฟิลด์
    function clearOldData4() {
        const fieldsToClear = document.querySelectorAll('#on-4 input, #on-4 textarea, #on-4 select');
        fieldsToClear.forEach(field => {
            if (field.type === 'checkbox' || field.type === 'radio') {
                field.checked = false;
            } else {
                field.value = '';
            }
        });
    }

    // ซ่อนปุ่ม input ของข้อ 2.1.6
    document.addEventListener('DOMContentLoaded', () => {
        // ตรวจสอบค่าเริ่มต้นของ radio และตั้งค่าฟิลด์ที่เกี่ยวข้อง
        const havingDebt = document.querySelector('input[name="having_debt"]:checked')?.value;
        if (havingDebt === 'มี') {
            toggleFields5(true); // แสดงฟิลด์พร้อมดึงข้อมูลเก่า
        } else {
            hideAllFields5(); // ซ่อนฟิลด์และตั้งค่า null
        }
    });

    function hideAllFields5() {
        // ซ่อนฟิลด์และตั้งค่า null ให้ input ทั้งหมด
        const debtField = document.getElementById('on-5');
        const totalDebtInput = document.getElementById('total_debt');
        const debtInSystem = document.getElementById('source_of_debt');
        const debtOutSystem = document.getElementById('source_of_debt');

        if (debtField) {
            debtField.style.display = 'none'; // ซ่อนฟิลด์
        }

        // ตั้งค่า null ให้ input text
        if (totalDebtInput) {
            totalDebtInput.value = null; // ตั้งค่า null
        }

        // ล้างการเลือก radio
        if (debtInSystem) {
            debtInSystem.checked = false; // ยกเลิกการเลือก
        }
        if (debtOutSystem) {
            debtOutSystem.checked = false; // ยกเลิกการเลือก
        }
    }

    function toggleFields5(show) {
        if (show) {
            const debtField = document.getElementById('on-5');
            if (debtField) {
                debtField.style.display = 'block'; // แสดงฟิลด์
            }
        } else {
            hideAllFields5(); // ซ่อนและตั้งค่า null
        }
    }

    // เพิ่ม Event Listener สำหรับการเลือก radio
    document.querySelectorAll('input[name="having_debt"]').forEach(radio => {
        radio.addEventListener('change', () => {
            if (radio.value === 'มี') {
                toggleFields5(true); // แสดงฟิลด์และดึงข้อมูล
            } else {
                hideAllFields5(); // ซ่อนฟิลด์และตั้งค่า null
            }
        });
    });

    // ซ่อนปุ่ม input ของข้อ 8
    document.addEventListener('DOMContentLoaded', () => {
        const selectedCause = document.querySelector('input[name="cause"]:checked')?.value;

        // ตรวจสอบค่าและแสดงฟิลด์ตามเงื่อนไข
        if (selectedCause === "ส่งต่อไปบริการยังหน่วยงานอื่นๆ") {
            toggleFields7(true);
        }

        // เพิ่ม event listener ให้กับ radio group
        const radioButtons = document.querySelectorAll('input[name="cause"]');
        radioButtons.forEach(radio => {
            radio.addEventListener('change', () => {
                const selectedValue = radio.value;

                // แสดงหรือซ่อนฟิลด์ตามค่าที่เลือก
                if (selectedValue === "ส่งต่อไปบริการยังหน่วยงานอื่นๆ") {
                    toggleFields7(true);
                } else {
                    toggleFields7(false);
                    clearOldData7(); // ล้างข้อมูลเมื่อเลือกตัวเลือกอื่น
                }
            });
        });
    });

    // ฟังก์ชันซ่อนฟิลด์ทั้งหมด
    function hideAllFields7() {
        document.getElementById('on-6').style.display = 'none';
    }

    // ฟังก์ชันแสดงหรือซ่อนฟิลด์
    function toggleFields7(show) {
        hideAllFields7(); // ซ่อนฟิลด์ทั้งหมดก่อน
        if (show) {
            document.getElementById('on-6').style.display = 'block'; // แสดงฟิลด์ "on-6"
        }
    }

    // ฟังก์ชันล้างข้อมูลเก่าในฟิลด์
    function clearOldData7() {
        const fieldsToClear = document.querySelectorAll('#on-6 input, #on-6 textarea, #on-6 select');
        fieldsToClear.forEach(field => {
            if (field.type === 'checkbox' || field.type === 'radio') {
                field.checked = false;
            } else {
                field.value = '';
            }
        });
    }

    // ซ่อนปุ่ม input ของข้อ 9.2
    document.addEventListener('DOMContentLoaded', () => {
        const selectedResult = document.querySelector('input[name="result"]:checked')?.value;

        // ตรวจสอบค่าและแสดงฟิลด์ตามเงื่อนไข
        if (selectedResult === "มี") {
            toggleFields8(true);
        }

        // เพิ่ม event listener ให้กับ radio group
        const radioButtons = document.querySelectorAll('input[name="result"]');
        radioButtons.forEach(radio => {
            radio.addEventListener('change', () => {
                const selectedValue = radio.value;

                // แสดงหรือซ่อนฟิลด์ตามค่าที่เลือก
                if (selectedValue === "มี") {
                    toggleFields8(true);
                } else {
                    toggleFields8(false);
                    clearOldData8(); // ล้างข้อมูลเมื่อเลือกตัวเลือกอื่น
                }
            });
        });
    });

    // ฟังก์ชันซ่อนฟิลด์ทั้งหมด
    function hideAllFields8() {
        document.getElementById('on-7').style.display = 'none';
    }

    // ฟังก์ชันแสดงหรือซ่อนฟิลด์
    function toggleFields8(show) {
        hideAllFields8(); // ซ่อนฟิลด์ทั้งหมดก่อน
        if (show) {
            document.getElementById('on-7').style.display = 'block'; // แสดงฟิลด์ "on-7"
        }
    }

    // ฟังก์ชันล้างข้อมูลเก่าในฟิลด์
    function clearOldData8() {
        const fieldsToClear = document.querySelectorAll('#on-7 input, #on-7 textarea, #on-7 select');
        fieldsToClear.forEach(field => {
            if (field.type === 'checkbox' || field.type === 'radio') {
                field.checked = false;
            } else {
                field.value = '';
            }
        });
    }

</script>
