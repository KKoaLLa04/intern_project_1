// // Xu ly ckeditor
// let classTextarea = document.querySelectorAll('.editor');
// if(classTextarea!==null){
//     classTextarea.forEach((item,index) => {
//         item.id = 'editor_'+(index+1);
//         CKEDITOR.replace(item.id);
//     })
// }

function openCkEditor(){
    let classTextarea = document.querySelectorAll('.editor');
    if(classTextarea!==null){
    classTextarea.forEach((item,index) => {
        item.id = 'editor_'+(index+1);
        CKEDITOR.replace(item.id);
    })}
}
openCkEditor();
let i=1;
const questionContentHtml = `<div class="col-12 my-5 question_text">
<div class="row">
    <div class="col-11">
        <div class="form-group">
            <label for="">Nội dung câu hỏi </label>
            <textarea name="question[content][]" class="editor form-control" placeholder="Nội dung câu hỏi..."></textarea>
            <p></p>

            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="">Đáp Án 1</label>
                        <input type="text" class="form-control" name="question[choice][]"
                            placeholder="Đáp án 1...">
                        <p></p>
                    </div>

                    <div class="form-group">
                        <label for="">Đáp Án 3</label>
                        <input type="text" class="form-control" name="question[choice][]"
                            placeholder="Đáp án 3...">
                        <p></p>
                    </div>
                </div>

                <div class="col-6">
                    <div class="form-group">
                        <label for="">Đáp Án 2</label>
                        <input type="text" class="form-control" name="question[choice][]"
                            placeholder="Đáp án 2...">
                        <p></p>
                    </div>

                    <div class="form-group">
                        <label for="">Đáp Án 4</label>
                        <input type="text" class="form-control" name="question[choice][]"
                            placeholder="Đáp án 4...">
                        <p></p>
                    </div>
                </div>

                <div class="col-12">
                    <div class="form-group">
                        <label for="">Đáp án chính xác</label>
                        <input type="text" placeholder="Đáp án chính xác..." class="form-control"
                            name="question[answer][]">
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-1">
        <p><a class="remove btn btn-danger w-100"><i class="fa fa-times"></i></a></p>
    </div>
</div>
</div>`

const addQuestion = document.querySelector('.add_question');
const questionItem = document.querySelector('.question_item');

if(addQuestion !== null && questionItem !== null){
    addQuestion.addEventListener('click', function(e){
        e.preventDefault();

       let questionItemNode = new DOMParser().parseFromString(questionContentHtml, 'text/html').querySelector('.question_text');

       questionItem.appendChild(questionItemNode);

    //    xu ly ckeditor
        openCkEditor();
    });

    questionItem.addEventListener('click', function(e){
        e.preventDefault(); //Ngăn tình trạng mặc định html (Thẻ a)
        if (e.target.classList.contains('remove') || e.target.parentElement.classList.contains('remove')){

            if (confirm('Bạn có chắc chắn muốn xoá?')){
                let question = e.target;
                while (question) {

                    question = question.parentElement;

                    if (question.classList.contains('question_text')) {
                        break;
                    }
                }

                if (question !== null) {
                    question.remove();
                }

            }
        }
    });
}

// xu ly phan quyen (permission)

let permissionObj = document.querySelector('.permission_obj');

if(permissionObj !== null){

    let rolePermission = permissionObj.querySelectorAll('tr')

    let allowRole =[
        'Thêm',
        'Sửa',
        'Xóa',
        'Nhân Bản',
    ]
    if(rolePermission !== null){
        rolePermission.forEach(function (item){
            let checkboxRole = item.querySelectorAll('input[type="checkbox"]');

            if(checkboxRole!==null){
                checkboxRole.forEach(function (checkbox){
                    checkbox.addEventListener('click', function (e){
                        let checkboxValue = this.value;
                        if(checkboxValue !== null && allowRole.includes(checkboxValue)){
                            let viewRole = item.querySelector('input[value="Xem"]');

                            if(viewRole !== null){
                                viewRole.checked = true;
                            }
                        }
                    })
                })
            }
        })
    }
}

// Xu ly hien thi video

const video = document.getElementById('video_url');
const watch = document.getElementById('watch_video');
if(video !== null){
    const videoUrl = video.value;

    watch.innerHTML = videoUrl

    video.addEventListener('change', function(e){
        const linkCurrent = e.target;
        
        watch.innerHTML = linkCurrent.value;
    })
}