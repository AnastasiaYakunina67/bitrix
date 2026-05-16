<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();?>

<div class="contact-form">
    <div class="contact-form__head">
        <div class="contact-form__head-title">Связаться</div>
        <div class="contact-form__head-text">Наши сотрудники помогут выполнить подбор услуги и&nbsp;расчет цены с&nbsp;учетом ваших требований</div>
    </div>

    <form class="contact-form__form" action="<?=POST_FORM_ACTION_URI?>" method="POST" enctype="multipart/form-data">
        <?=bitrix_sessid_post()?>
        <input type="hidden" name="WEB_FORM_ID" value="<?=$arParams["WEB_FORM_ID"]?>">

        <div class="contact-form__form-inputs">
            <?foreach ($arResult["QUESTIONS"] as $FIELD_SID => $arQuestion):?>
                <?if ($arQuestion['STRUCTURE'][0]['FIELD_TYPE'] == 'text'):?>
                    <div class="input contact-form__input">
                        <label class="input__label" for="<?=$arQuestion['STRUCTURE'][0]['ID']?>">
                            <div class="input__label-text"><?=$arQuestion['CAPTION']?></div>
                            <input class="input__input" type="text" name="form_<?=$arQuestion['STRUCTURE'][0]['FIELD_TYPE']?>_<?=$arQuestion['STRUCTURE'][0]['ID']?>" id="<?=$arQuestion['STRUCTURE'][0]['ID']?>" value="">
                            <div class="input__notification">Поле обязательно для заполнения</div>
                        </label>
                    </div>
                <?elseif ($arQuestion['STRUCTURE'][0]['FIELD_TYPE'] == 'textarea'):?>
                    <div class="contact-form__form-message">
                        <div class="input">
                            <label class="input__label" for="<?=$arQuestion['STRUCTURE'][0]['ID']?>">
                                <div class="input__label-text"><?=$arQuestion['CAPTION']?></div>
                                <textarea class="input__input" name="form_<?=$arQuestion['STRUCTURE'][0]['FIELD_TYPE']?>_<?=$arQuestion['STRUCTURE'][0]['ID']?>" id="<?=$arQuestion['STRUCTURE'][0]['ID']?>"></textarea>
                                <div class="input__notification"></div>
                            </label>
                        </div>
                    </div>
                <?endif?>
            <?endforeach?>
        </div>

        <div class="contact-form__bottom">
            <div class="contact-form__bottom-policy">Нажимая &laquo;Отправить&raquo;, Вы&nbsp;подтверждаете, что ознакомлены, полностью согласны и&nbsp;принимаете условия &laquo;Согласия на&nbsp;обработку персональных данных&raquo;.</div>
            <button class="form-button contact-form__bottom-button" type="submit" name="web_form_submit">
                <div class="form-button__title">Оставить заявку</div>
            </button>
        </div>
    </form>
</div>
