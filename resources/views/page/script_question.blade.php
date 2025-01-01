<script>
    function validateAge(input) {
        const value = parseInt(input.value, 10);
        if (value < 1) {
            input.value = 1; // ปรับค่าให้เป็นค่าต่ำสุด
        } else if (value > 140) {
            input.value = 140; // ปรับค่าให้เป็นค่าสูงสุด
        }
    }
    function changePageHandle(pageNumber) {
        // รีเซ็ตการแสดงผลทุกหน้า
        document.getElementById("page-1").classList.remove("active");
        document.getElementById("page-2").classList.remove("active");

        // แสดงหน้าที่เลือก
        if (pageNumber === 1) {
            document.getElementById("page-1").classList.add("active");
        } else if (pageNumber === 2) {
            document.getElementById("page-2").classList.add("active");
        }
    }

    document.addEventListener('DOMContentLoaded', function() {
        const choiceInputs = document.querySelectorAll('.choice-input');

        choiceInputs.forEach(input => {
            input.addEventListener('change', function() {
                const questionId = this.getAttribute('data-question-id');
                const point = Number(this.getAttribute('data-point'));

                if (point === 0 && this.checked) {
                    // ซ่อน choice อื่นๆ ใน question_id เดียวกัน
                    choiceInputs.forEach(otherInput => {
                        if (otherInput.getAttribute('data-question-id') ===
                            questionId && otherInput !== this) {
                            otherInput.closest('div').style.display = 'none';
                            otherInput.checked =
                                false; // ยกเลิกการเลือกของ choice อื่นๆ
                        }
                    });
                } else if (!this.checked) {
                    // แสดง choice อื่นๆ กลับมาเมื่อยกเลิกการเลือก
                    choiceInputs.forEach(otherInput => {
                        if (otherInput.getAttribute('data-question-id') ===
                            questionId) {
                            otherInput.closest('div').style.display = 'block';
                        }
                    });
                }
            });
        });
    });
</script>
