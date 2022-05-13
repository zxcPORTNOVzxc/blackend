<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" />
    <style>
        .block {
            margin-bottom: 7px;
        }

        .radios {
            display: flex;
            justify-content: space-around;
            align-items: center;
            padding: 0 10px;
            border: 1px solid #ced4da;
            border-radius: 5px;
        }
    </style>
</head>

<body>
    <div class="form-container">
        <form method="POST" action="">
            <div class="input-group block">
                <input type="text" class="form-control" name="name" placeholder="Ваше имя" />
            </div>
            <div class="input-group block">
                <input type="text" class="form-control" name="email" placeholder="example@mail.ru" />
            </div>
            <div class="block" id="date-block">
                <span class="block-title">Дата рождения</span>
                <input type="date" class="form-control" name="date" />
            </div>
            <div class="block" id="gender-block">
                <span class="block-title">Пол</span>
                <div class="radios">
                    <div class="male-radio">
                        <input class="form-check-input" type="radio" name="gender" value="m" />
                        <label class="form-check-label" for="male">Мужской</label>
                    </div>
                    <div class="female-radio">
                        <input class="form-check-input" type="radio" name="gender" value="f" />
                        <label class="form-check-label" for="female">Женский</label>
                    </div>
                </div>
            </div>
            <div class="block" id="limbs-block">
                <span class="block-title">Конечности</span>
                <div class="radios">
                    <div class="limbs-radio">
                        <input class="form-check-input" type="radio" name="limbs" value="1" />
                        <label class="form-check-label" for="male">1</label>
                    </div>
                    <div class="limbs-radio">
                        <input class="form-check-input" type="radio" name="limbs" value="2" />
                        <label class="form-check-label" for="female">2</label>
                    </div>
                    <div class="limbs-radio">
                        <input class="form-check-input" type="radio" name="limbs" value="3" />
                        <label class="form-check-label" for="female">3</label>
                    </div>
                    <div class="limbs-radio">
                        <input class="form-check-input" type="radio" name="limbs" value="4" />
                        <label class="form-check-label" for="female">4</label>
                    </div>
                </div>
            </div>
            <div class="block">
                <span class="block-title">Способности</span>
                <select class="form-select form-select-lg mb-2" name="abilities[]" multiple>
                    <option value="endless life">Бессмертие</option>
                    <option value="through walls">Прохождение сквозь стены</option>
                    <option value="levitation">Левитация</option>
                </select>
            </div>
            <div class="input-group">
                <textarea class="form-control" placeholder="Расскажите о себе..." name="bio"></textarea>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="y" id="policy" name="policy" checked />
                    <label class="form-check-label" for="policy">Согласен с политикой обработки данных</label>
                </div>
                <button class="btn btn-primary" type="submit" id="send-btn">Отправить</button>
        </form>
    </div>
</body>

</html>