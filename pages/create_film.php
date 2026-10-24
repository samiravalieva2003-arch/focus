


<div class="create_film container py-100">
    <div class="title_block">
        <div class="title">
            <div class="subheading">
                <hr>
                <p>КАРТОЧКА ФИЛЬМА</p>
            </div>
            <h2>Добавление фильма</h2>
        </div>
    </div>

         <form action="" method="post" enctype="multipart/form-data" class="create_film_form_wrapper">
        <div class="create_film_sidebar">

            <div class="upload_card">
                <h3>Афиша</h3>
                <p class="upload_desc">Изображение формата JPG, PNG, JPEG, размером не более 2МБ</p>
                <div class="upload_zone">
                    <div class="upload_icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4 16L8.586 11.414C8.96106 11.0391 9.46967 10.8284 10 10.8284C10.5303 10.8284 11.0389 11.0391 11.414 11.414L16 16M14 14L15.586 12.414C15.9611 12.0391 16.4697 11.8284 17 11.8284C17.5303 11.8284 18.0389 12.0391 18.414 12.414L20 14M14 8H14.01M6 20H18C19.1046 20 20 19.1046 20 18V6C20 4.89543 19.1046 4 18 4H6C4.89543 4 4 4.89543 4 6V18C4 19.1046 4.89543 20 6 20Z" stroke="#E52B2F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <p class="upload_title">Загрузите изображение</p>
                    <p class="upload_text">Перетащите файл сюда или выберите на компьютере</p>
                    <label class="upload_btn">
                        <input type="file" accept="" hidden>
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 4V20M20 12H4" stroke="white" stroke-width="2" stroke-linecap="round" />
                        </svg>
                        Выбрать файл
                    </label>
                </div>
            </div>

            <div class="upload_card">
                <h3>Трейлер</h3>
                <p class="upload_desc">Видео формата MP4, размером не более 300 МБ и разрешением 1920x1080</p>
                <div class="upload_zone">
                    <div class="upload_icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4 16L8.586 11.414C8.96106 11.0391 9.46967 10.8284 10 10.8284C10.5303 10.8284 11.0389 11.0391 11.414 11.414L16 16M14 14L15.586 12.414C15.9611 12.0391 16.4697 11.8284 17 11.8284C17.5303 11.8284 18.0389 12.0391 18.414 12.414L20 14M14 8H14.01M6 20H18C19.1046 20 20 19.1046 20 18V6C20 4.89543 19.1046 4 18 4H6C4.89543 4 4 4.89543 4 6V18C4 19.1046 4.89543 20 6 20Z" stroke="#E52B2F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <p class="upload_title">Загрузите видео</p>
                    <p class="upload_text">Перетащите файл сюда или выберите на компьютере</p>
                    <label class="upload_btn">
                        <input type="file" accept="video/mp4" hidden>
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 4V20M20 12H4" stroke="white" stroke-width="2" stroke-linecap="round" />
                        </svg>
                        Выбрать файл
                    </label>
                </div>
            </div>
        </div>

        <div class="create_film_form">
            <h3>Информация о фильме</h3>


                <div class="form_group">
                    <label>Название</label>
                    <input type="text" placeholder="Введите название фильма" name="name">
                </div>

                <div class="form_row">
                    <div class="form_group">
                        <label>Краткое описание</label>
                        <textarea placeholder="Кратко опишите сюжет, атмосферу и особенности фильма" name="description"></textarea>
                    </div>
                    <div class="form_group">
                        <label>Сюжет</label>
                        <textarea placeholder="Кратко опишите сюжет, атмосферу и особенности фильма" name=""plot></textarea>
                    </div>
                </div>

                <div class="form_row form_row_3">
                    <div class="form_group">
                        <label>Жанр</label>
                        <div class="select_wrapper">
                            <select name="genre">
                                <option value="" disabled >Выберите жанры</option>
                            
                    
                            </select>
                            <svg class="select_arrow" width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1.5L6 6.5L11 1.5" stroke="#F3EFE9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                    </div>
                    <div class="form_group">
                        <label>Длительность</label>
                        <input type="number" placeholder="0 мин">
                    </div>
                    <div class="form_group">
                        <label>Возраст</label>
                        <div class="select_wrapper">
                            <select name="ageLimit">
                                <option value="" disabled >Выбрите возраст</option>
                            </select>
                            <svg class="select_arrow" width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1.5L6 6.5L11 1.5" stroke="#F3EFE9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="form_row form_row_3">
                    <div class="form_group">
                        <label>Страна</label>
                        <input type="text" placeholder="Введите страну происхождения" name="country">
                    </div>
                    <div class="form_group">
                        <label>Год</label>
                        <input type="number" placeholder="2026" name="year">
                    </div>
                    <div class="form_group">
                        <label>Дата премьеры</label>
                        <input type="date" name="dataPremier" id="">
                    </div>
                </div>

                <div class="form_group">
                    <label>Режиссёр</label>
                    <input type="text" name="director" placeholder="Имя и фамилия режиссёра">
                </div>

                <div class="form_group">
                    <label>Актёры</label>
                    <textarea placeholder="Перечислите основных актёров через запятую" name="acters"></textarea>
                </div>

                <div class="form_actions">
                    <button type="submit" class="save_btn">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M19 21H5C4.46957 21 3.96086 20.7893 3.58579 20.4142C3.21071 20.0391 3 19.5304 3 19V5C3 4.46957 3.21071 3.96086 3.58579 3.58579C3.96086 3.21071 4.46957 3 5 3H16L21 8V19C21 19.5304 20.7893 20.0391 20.4142 20.4142C20.0391 20.7893 19.5304 21 19 21Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M7 3V8H15V3M7 21V15H17V21" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        Сохранить фильм
                    </button>

                    <a href="/?page=admin" class="back_link">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15 18L9 12L15 6" stroke="#A29E9A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        Вернуться к просмотру афиши фильмов
                    </a>
                </div>

           
        </div>
    </form>
</div>