<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Популярные категории</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

<header class="header">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 offset-xl-1 col-12 ">
                <div class="header-l">
                    <a href="#" class="header-l__logo">
                        <svg width="114px" height="45px" fill="#34495E">
                            <use href="{{asset('img/icons/sprite.svg#icon-wezom-logo')}}"></use>
                        </svg>
                    </a>
                    <div class="header-l__menu d-flex justify-content-between align-items-center">
                        <div class="header-menu">
                            <a href="#" class="header-l__link header-menu__link" id="header-menu__link">
                                <svg width="30px" height="25px" stroke="#fff">
                                    <use href="{{asset('img/icons/sprite.svg#icon-catalog')}}"></use>
                                </svg>
                                <span>Каталог</span>
                            </a>
                            <div class="header-catalog" id="header-catalog">
                                <ul class="header-catalog-menu">
                                    <li class="header-catalog-menu__item">
                                        <a href="#" class="header-catalog-menu__link">
                                            <svg class="header-catalog-menu__item-img" width="34px" height="34px">
                                                <use href="{{asset('img/icons/sprite.svg#icon-menu-turbine')}}"></use>
                                            </svg>
                                            <span>Турбины</span>
                                            <svg class="header-catalog-menu__arrow-img" width="16px" height="10px" fill="#33485D" fill-opacity="0.5">
                                                <use href="{{asset('img/icons/sprite.svg#icon-arrow-header')}}"></use>
                                            </svg>
                                        </a>
                                    </li>
                                    <li class="header-catalog-menu__item">
                                        <a href="#" class="header-catalog-menu__link">
                                            <svg width="34px" height="34px">
                                                <use href="{{asset('img/icons/sprite.svg#icon-menu-cartridge')}}"></use>
                                            </svg>
                                            <span>Картриджи</span>
                                            <svg class="header-catalog-menu__arrow-img" width="16px" height="10px" fill="#33485D" fill-opacity="0.5">
                                                <use href="{{asset('img/icons/sprite.svg#icon-arrow-header')}}"></use>
                                            </svg>
                                        </a>
                                    </li>
                                    <li class="header-catalog-menu__item">
                                        <a href="#" class="header-catalog-menu__link">
                                            <svg width="34px" height="34px">
                                                <use href="{{asset('img/icons/sprite.svg#icon-menu-geometry')}}"></use>
                                            </svg>
                                            <span>Геометрии</span>
                                            <svg class="header-catalog-menu__arrow-img" width="16px" height="10px" fill="#33485D" fill-opacity="0.5">
                                                <use href="{{asset('img/icons/sprite.svg#icon-arrow-header')}}"></use>
                                            </svg>
                                        </a>
                                    </li>
                                    <li class="header-catalog-menu__item">
                                        <a href="#" class="header-catalog-menu__link">
                                            <svg width="34px" height="34px">
                                                <use href="{{asset('img/icons/sprite.svg#icon-menu-aktuator')}}"></use>
                                            </svg>
                                            <span>Актуаторы</span>
                                            <svg class="header-catalog-menu__arrow-img" width="16px" height="10px" fill="#33485D" fill-opacity="0.5">
                                                <use href="{{asset('img/icons/sprite.svg#icon-arrow-header')}}"></use>
                                            </svg>
                                        </a>
                                    </li>
                                    <li class="header-catalog-menu__item">
                                        <a href="#" class="header-catalog-menu__link">
                                            <svg width="34px" height="34px">
                                                <use href="{{asset('img/icons/sprite.svg#icon-menu-servo')}}"></use>
                                            </svg>
                                            <span>Сервоприводы</span>
                                            <svg class="header-catalog-menu__arrow-img" width="16px" height="10px" fill="#33485D" fill-opacity="0.5">
                                                <use href="{{asset('img/icons/sprite.svg#icon-arrow-header')}}"></use>
                                            </svg>
                                        </a>
                                    </li>
                                    <li class="header-catalog-menu__item">
                                        <a href="#" class="header-catalog-menu__link">
                                            <svg width="34px" height="34px">
                                                <use href="{{asset('img/icons/sprite.svg#icon-menu-laying')}}"></use>
                                            </svg>
                                            <span>Прокладки</span>
                                            <svg class="header-catalog-menu__arrow-img" width="16px" height="10px" fill="#33485D" fill-opacity="0.5">
                                                <use href="{{asset('img/icons/sprite.svg#icon-arrow-header')}}"></use>
                                            </svg>
                                        </a>
                                    </li>
                                    <li class="header-catalog-menu__item">
                                        <a href="#" class="header-catalog-menu__link">
                                            <svg width="34px" height="34px">
                                                <use href="{{asset('img/icons/sprite.svg#icon-menu-other')}}"></use>
                                            </svg>
                                            <span>Прочие запчасти</span>
                                            <svg class="header-catalog-menu__arrow-img" width="16px" height="10px" fill="#33485D" fill-opacity="0.5">
                                                <use href="{{asset('img/icons/sprite.svg#icon-arrow-header')}}"></use>
                                            </svg>
                                        </a>
                                    </li>
                                    <li class="header-catalog-menu__item">
                                        <a href="#" class="header-catalog-menu__link">
                                            <svg width="34px" height="34px">
                                                <use href="{{asset('img/icons/sprite.svg#icon-menu-aktuator-ev')}}"></use>
                                            </svg>
                                            <span>Электронновакуумные актуаторы</span>
                                            <svg class="header-catalog-menu__arrow-img" width="16px" height="10px" fill="#33485D" fill-opacity="0.5">
                                                <use href="{{asset('img/icons/sprite.svg#icon-arrow-header')}}"></use>
                                            </svg>
                                        </a>
                                    </li>
                                    <li class="header-catalog-menu__item">
                                        <a href="#" class="header-catalog-menu__link">
                                            <svg width="34px" height="34px">
                                                <use href="{{asset('img/icons/sprite.svg#icon-menu-turbine-body')}}"></use>
                                            </svg>
                                            <span>Корпуса турбины</span>
                                            <svg class="header-catalog-menu__arrow-img" width="16px" height="10px" fill="#33485D" fill-opacity="0.5">
                                                <use href="{{asset('img/icons/sprite.svg#icon-arrow-header')}}"></use>
                                            </svg>
                                        </a>
                                    </li>
                                    <li class="header-catalog-menu__item">
                                        <a href="#" class="header-catalog-menu__link">
                                            <svg width="34px" height="34px">
                                                <use href="{{asset('img/icons/sprite.svg#icon-menu-servo-parts')}}"></use>
                                            </svg>
                                            <span>Запчасти для сервопривода</span>
                                            <svg class="header-catalog-menu__arrow-img" width="16px" height="10px" fill="#33485D" fill-opacity="0.5">
                                                <use href="{{asset('img/icons/sprite.svg#icon-arrow-header')}}"></use>
                                            </svg>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="header-l__categories">
                            <a href="#" class="header-l__link header-l__categories-link">Все категории</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 col-12">
                <div class="header-m">
                    <div class="header-m__top d-flex">
                        <nav class="header-menu">
                            <a href="#" class="header-menu__item header-menu__item--active">О Компании</a>
                            <a href="#" class="header-menu__item">Политика конфиденциальности</a>
                            <a href="#" class="header-menu__item">Доставка и оплата</a>
                            <a href="#" class="header-menu__item">Гарантия</a>
                        </nav>
                        <div class="header-m__phones">
                            <div class="phones-accordion">
                                <div class="phones-accordion__item">
                                    <a href="tel:+380680000000" class="phones-accordion__link">+38 068 000 00 00</a>
                                    <div class="phones-accordion__content">
                                        <a href="tel:+380680000000" class="phones-accordion__link">+38 068 123 45 67</a>
                                        <a href="tel:+380680000000" class="phones-accordion__link">+38 068 765 43 21</a>
                                    </div>
                                    <button class="phones-accordion__btn">
                                        <svg width="10px" height="6px" fill="#FFBE48">
                                            <use href="{{asset('img/icons/sprite.svg#icon-arrow-header')}}"></use>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="header-m-bottom">
                        <div class="header-search">
                            <form action="URL">
                                <input class="header-search__input" type="text" placeholder="Поиск, например &#147;турбина&#148;">
                                <button type="submit" class="header-search__button">
                                    <svg width="19px" height="18px" fill="#33485D">
                                        <use href="{{asset('img/icons/sprite.svg#icon-loupe')}}"></use>
                                    </svg>
                                </button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-12">
                <div class="header-r">
                    <div class="header-r__top d-flex">
                        <div class="header-lang d-flex">
                            <a href="#" class="header-lang__item">
                                <span>Ua</span>
                            </a>
                            <a href="#" class="header-lang__item">
                                <span>Ru</span>
                            </a>
                        </div>
                        <div class="header-auth">
                            <a href="#" class="header-auth__link">
                                <span>Войти</span>
                                <svg width="20px" height="20px" fill="#FFBE48">
                                    <use href="{{asset('img/icons/sprite.svg#icon-auth')}}"></use>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="header-r__bottom">
                        <div class="header-buttons">
                            <div class="header-buttons__item header-buttons__item-compare">
                                <button class="header-buttons__button header-buttons__button-compare">
                                    <svg width="30px" height="30px" fill="#33485D">
                                        <use href="{{asset('img/icons/sprite.svg#icon-compare-header')}}"></use>
                                    </svg>
                                </button>
                            </div>
                            <div class="header-buttons__item header-buttons__item-wish">
                                <button class="header-buttons__button header-buttons__button-wish">
                                    <svg width="30px" height="30px" fill="#33485D">
                                        <use href="{{asset('img/icons/sprite.svg#icon-wish-header')}}"></use>
                                    </svg>
                                </button>
                            </div>
                            <div class="header-buttons__item header-buttons__item-basket">
                                <button class="header-buttons__button header-buttons__button-basket">
                                    <span class="header-buttons__button-number">3</span>
                                    <svg width="30px" height="30px" fill="#33485D">
                                        <use href="{{asset('img/icons/sprite.svg#icon-buy-basket-header')}}"></use>
                                    </svg>
                                </button>
                                <div class="header-basket">
                                    <div class="header-basket__number">В корзине <span>3 товара</span></div>
                                    <div class="header-basket__sum">На сумму <span>30 000 ₴</span></div>
                                    <div class="header-basket__order">
                                        <a href="#" class="header-basket__order-link order-button">Оформить заказ
                                            <svg width="30px" height="30px" fill="#fff">
                                                <use href="{{asset('img/icons/sprite.svg#icon-buy-basket-header')}}"></use>
                                            </svg>
                                        </a>
                                    </div>
                                    <div class="header-basket__edit">
                                        <a data-fancybox data-options='{"src": "#modal-edit", "touch": false}'
                                        href="javascript:;" class="header-basket__edit-link btn btn-primary">Редактировать заказ</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-edit" id="modal-edit">
                        <button data-fancybox-close="" class="modal-edit__button-close fancybox-button fancybox-button--close" title="Close">
                            <svg width="15px" height="15px" fill="#5C6D7D">
                                <use href="{{asset('img/icons/sprite.svg#icon-header-popup-close')}}"></use>
                            </svg>
                        </button>
                        <span class="modal-edit__title">Корзина</span>
                        <div class="modal-edit__group">
                            <div class="edit-item">
                                <button class="edit-item__button--delete">
                                    <svg width="16px" height="15px" fill="#33485D" fill-opacity="0.5">
                                        <use href="{{asset('img/icons/sprite.svg#icon-popup-item-delete')}}"></use>
                                    </svg>
                                </button>
                                <div class="edit-item__img">
                                    <img class="lazy" data-src="{{asset('img/popup/basket-img-1.jpg')}}" src="{{asset('img/blank.gif')}}" alt="Картридж турбины для Mercedes E-klasse (W211) 2.7CDI">
                                </div>
                                <div class="edit-item__info">
                                    <span class="edit-item__title">070-150-017 Картридж турбины для Mercedes E-klasse (W211) 2.7CDI</span>
                                    <div class="edit-item__info-inner">
                                        <div class="edit-item__services">
                                        <span class="edit-item__price">
                                            Стоимость товара:
                                            <span class="edit-item__price-value">5 000 ₴</span>
                                        </span>
                                            <button class="edit-item__service">Доп. услуга:
                                                <span class="edit-item__service-info">Регенерация турбины 500₴</span>
                                            </button>
                                            <button class="edit-item__service">Доп. услуга:
                                                <span class="edit-item__service-info">Регенерация турбины за 1 день 500₴</span>
                                            </button>
                                            <button class="edit-item__service">Доп. услуга:
                                                <span class="edit-item__service-info">Регенерация турбины за 1 день 500₴</span>
                                            </button>
                                        </div>
                                        <div class="edit-counter">
                                            <button class="counter__btn edit-counter__btn edit-counter__btn-minus" data-direction="minus">
                                                <svg width="21px" height="21px" fill="#33485D" fill-opacity="0.5">
                                                    <use href="{{asset('img/icons/sprite.svg#icon-counter-minus')}}"></use>
                                                </svg>
                                            </button>
                                            <input type="text" class="counter__value edit-counter__value" value="4">
                                            <button class="counter__btn edit-counter__btn edit-counter__btn-plus" data-direction="plus">
                                                <svg width="21px" height="21px" fill="#33485D" fill-opacity="0.5">
                                                    <use href="{{asset('img/icons/sprite.svg#icon-counter-plus')}}"></use>
                                                </svg>
                                            </button>
                                            <div class="edit-counter__price">21 000 ₴</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="edit-item">
                                <button class="edit-item__button--delete">
                                    <svg width="16px" height="15px" fill="#33485D" fill-opacity="0.5">
                                        <use href="{{asset('img/icons/sprite.svg#icon-popup-item-delete')}}"></use>
                                    </svg>
                                </button>
                                <div class="edit-item__img">
                                    <img class="lazy" data-src="{{asset('img/popup/basket-img-2.jpg')}}" src="{{asset('img/blank.gif')}}" alt="Картридж турбины для Mercedes E-klasse">
                                </div>
                                <div class="edit-item__info">
                                    <span class="edit-item__title">070-150-017 Картридж турбины для Mercedes E-klasse</span>
                                    <div class="edit-item__info-inner">
                                        <div class="edit-item__services">
                                        <span class="edit-item__price">
                                            Стоимость товара:
                                            <span class="edit-item__price-value">5 000 ₴</span>
                                        </span>
                                            <button class="edit-item__service">Доп. услуга:
                                                <span class="edit-item__service-info">Регенерация турбины за 1 день 500₴</span>
                                            </button>
                                        </div>
                                        <div class="edit-counter">
                                            <button class="counter__btn edit-counter__btn edit-counter__btn-minus" data-direction="minus">
                                                <svg width="21px" height="21px" fill="#33485D" fill-opacity="0.5">
                                                    <use href="{{asset('img/icons/sprite.svg#icon-counter-minus')}}"></use>
                                                </svg>
                                            </button>
                                            <input type="text" class="counter__value edit-counter__value" value="1">
                                            <button class="counter__btn edit-counter__btn edit-counter__btn-plus" data-direction="plus">
                                                <svg width="21px" height="21px" fill="#33485D" fill-opacity="0.5">
                                                    <use href="{{asset('img/icons/sprite.svg#icon-counter-plus')}}"></use>
                                                </svg>
                                            </button>
                                            <div class="edit-counter__price">5 500 ₴</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="edit-item">
                                <button class="edit-item__button--delete">
                                    <svg width="16px" height="15px" fill="#33485D" fill-opacity="0.5">
                                        <use href="{{asset('img/icons/sprite.svg#icon-popup-item-delete')}}"></use>
                                    </svg>
                                </button>
                                <div class="edit-item__img">
                                    <img class="lazy" data-src="{{asset('img/popup/basket-img-3.jpg')}}" src="{{asset('img/blank.gif')}}" alt="Картридж турбины E-klasse (W211)">
                                </div>
                                <div class="edit-item__info">
                                    <span class="edit-item__title">070-150-017 Картридж турбины E-klasse (W211)</span>
                                    <div class="edit-item__info-inner">
                                        <div class="edit-item__services">
                                        <span class="edit-item__price">
                                            Стоимость товара:
                                            <span class="edit-item__price-value">5 000 ₴</span>
                                        </span>
                                            <button class="edit-item__service">Доп. услуга:
                                                <span class="edit-item__service-info">Регенерация турбины за 1 день 500₴</span>
                                            </button>
                                        </div>
                                        <div class="edit-counter">
                                            <button class="counter__btn edit-counter__btn edit-counter__btn-minus" data-direction="minus">
                                                <svg width="21px" height="21px" fill="#33485D" fill-opacity="0.5">
                                                    <use href="{{asset('img/icons/sprite.svg#icon-counter-minus')}}"></use>
                                                </svg>
                                            </button>
                                            <input type="text" class="counter__value edit-counter__value" value="1">
                                            <button class="counter__btn edit-counter__btn edit-counter__btn-plus" data-direction="plus">
                                                <svg width="21px" height="21px" fill="#33485D" fill-opacity="0.5">
                                                    <use href="{{asset('img/icons/sprite.svg#icon-counter-plus')}}"></use>
                                                </svg>
                                            </button>
                                            <div class="edit-counter__price">5 500 ₴</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-edit-order">
                            <div class="modal-edit-order__top">
                                <span class="modal-edit-order__total">Итого</span>
                                <span class="modal-edit-order__price">32 000 ₴</span>
                            </div>
                            <div class="modal-edit-order__buttons">
                                <button class="modal-edit-order__shopping">Продолжить покупки</button>
                                <a href="#" class="modal-edit-order__buy order-button">Оформить заказ
                                    <svg width="30px" height="30px" fill="#fff">
                                        <use href="{{asset('img/icons/sprite.svg#icon-buy-basket-header')}}"></use>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="category">
    <div class="container">
        <div class="category-top">
            <div class="category-top__bg">
                <div class="category-top__figures-left"></div>
                <div class="category-top__figures-right">
                    <img class="lazy" data-src="{{asset('img/icons/right-figure.svg')}}" src="{{asset('img/blank.gif')}}" alt="">
                </div>
            </div>
            <div class="category-top__inner">
                <div class="category-top__heading">
                    <div class="row d-flex align-items-center">
                        <div class="col-12 offset-xl-1 col-xl-8">
                            <div class="category-top__topic">
                                <h2 class="category-top__title title">Популярные категории</h2>
                            </div>
                        </div>
                        <div class="col-12 col-xl-2 d-flex category-more-d ">
                            <div class="category-top__more">
                                <a class="category-top__link more-link more-link--white" href="#">Все категории</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="category-top__cards">
                        <div class="category-top__cards-inner offset-xl-1 d-flex">

                            <div class="category-top__card">
                                <div class="category-top__card-top">
                                    <a class="category-top__card-img-link" href="#">
                                        <div class="category-top__card-img">
                                            <picture>
                                                <source srcset="{{asset('img/category/cards/image-1.webp')}}" type="image/webp">
                                                <img class="lazy" data-src="{{asset('img/category/cards/image-1.jpg')}}" src="{{asset('img/blank.gif')}}" alt="Косметика и гигиена">
                                            </picture>
                                        </div>
                                    </a>
                                </div>
                                <div class="category-top__card-info">
                                    <a class="category-top__card-link" href="#">Косметика и гигиена</a>
                                </div>
                            </div>

                            <div class="category-top__card">
                                <div class="category-top__card-top">
                                    <a class="category-top__card-img-link" href="#">
                                        <div class="category-top__card-img">
                                            <picture>
                                                <source srcset="{{asset('img/category/cards/image-2.webp')}}" type="image/webp">
                                                <img class="lazy" data-src="{{asset('img/category/cards/image-2.jpg')}}" src="{{asset('img/blank.gif')}}" alt="Техника и электроника">
                                            </picture>
                                        </div>
                                    </a>
                                </div>
                                <div class="category-top__card-info">
                                    <a class="category-top__card-link" href="#">Техника и электроника</a>
                                </div>
                            </div>

                            <div class="category-top__card">
                                <div class="category-top__card-top">
                                    <a class="category-top__card-img-link" href="#">
                                        <div class="category-top__card-img">
                                            <picture>
                                                <source srcset="{{asset('img/category/cards/image-3.webp')}}" type="image/webp">
                                                <img class="lazy" data-src="{{asset('img/category/cards/image-3.jpg')}}" src="{{asset('img/blank.gif')}}" alt="Повседневная одежда">
                                            </picture>
                                        </div>
                                    </a>
                                </div>
                                <div class="category-top__card-info">
                                    <a class="category-top__card-link" href="#">Повседневная одежда</a>
                                </div>
                            </div>

                            <div class="category-top__card">
                                <div class="category-top__card-top">
                                    <a class="category-top__card-img-link" href="#">
                                        <div class="category-top__card-img">
                                            <picture>
                                                <source srcset="{{asset('img/category/cards/image-4.webp')}}" type="image/webp">
                                                <img class="lazy" data-src="{{asset('img/category/cards/image-4.jpg')}}" src="{{asset('img/blank.gif')}}" alt="Одежда и обувь">
                                            </picture>
                                        </div>
                                    </a>
                                </div>
                                <div class="category-top__card-info">
                                    <a class="category-top__card-link" href="#">Одежда и обувь</a>
                                </div>
                            </div>

                            <div class="category-top__card">
                                <div class="category-top__card-top">
                                    <a class="category-top__card-img-link" href="#">
                                        <div class="category-top__card-img">
                                            <picture>
                                                <source srcset="{{asset('img/category/cards/image-5.webp')}}" type="image/webp">
                                                <img class="lazy" data-src="{{asset('img/category/cards/image-5.jpg')}}" src="{{asset('img/blank.gif')}}" alt="Сапоги и туфли">
                                            </picture>
                                        </div>
                                    </a>
                                </div>
                                <div class="category-top__card-info">
                                    <a class="category-top__card-link" href="#">Сапоги и туфли</a>
                                </div>
                            </div>

                            <div class="category-top__card">
                                <div class="category-top__card-top">
                                    <a class="category-top__card-img-link" href="#">
                                        <div class="category-top__card-img">
                                            <picture>
                                                <source srcset="{{asset('img/category/cards/image-6.webp')}}" type="image/webp">
                                                <img class="lazy" data-src="{{asset('img/category/cards/image-6.jpg')}}" src="{{asset('img/blank.gif')}}" alt="Универсальное">
                                            </picture>
                                        </div>
                                    </a>
                                </div>
                                <div class="category-top__card-info">
                                    <a class="category-top__card-link" href="#">Универсальное</a>
                                </div>
                            </div>

                            <div class="category-top__card">
                                <div class="category-top__card-top">
                                    <a class="category-top__card-img-link" href="#">
                                        <div class="category-top__card-img">
                                            <picture>
                                                <source srcset="{{asset('img/category/cards/image-7.webp')}}" type="image/webp">
                                                <img class="lazy" data-src="{{asset('img/category/cards/image-7.jpg')}}" src="{{asset('img/blank.gif')}}" alt="Сумки и кошельки">
                                            </picture>
                                        </div>
                                    </a>
                                </div>
                                <div class="category-top__card-info">
                                    <a class="category-top__card-link" href="#">Сумки и кошельки</a>
                                </div>
                            </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="category-info">
        <div class="category-info__inner">
            <div class="container">
                <div class="category-info__inner-bg">
                    <img class="lazy" data-src="{{asset('img/category/info-bg.png')}}" src="{{asset('img/blank.gif')}}" alt="">
                </div>
                <div class="category-info__description d-flex flex-column align-items-center">
                    <div class="category-info__text">
                        <span>Тут должен быть какой то  текст, потом придумаем какой точно будет =)</span>
                    </div>

                    <div class="category-info__call-back">
                        <a class="category-info__link more-link more-link--pink d-flex align-items-center" href="#">Замовити зворотній зв’язок
                            <svg width="22px" height="19px" fill="white">
                                <use href="{{asset('img/icons/sprite.svg#icon-arrow')}}"></use>
                            </svg>
                        </a>
                    </div>
                </div>
                <!-- /.category-info__description -->
                <div class="category-info__cards">
                    <div class="row">
                        <div class="col-xl-10 offset-xl-1">
                            <div class="row">
                                <div class="col-12 col-sm-6 col-lg-3 col-xl-3">
                                    <div class="category-info__card">
                                        <div class="category-info__card-info">
                                            <span>Текст карточки первый</span>
                                        </div>
                                        <div class="category-info__card-duration">
                                            <svg width="20" height="20" fill="transparent" stroke="#6A677B">
                                                <use href="{{asset('img/icons/sprite.svg#icon-clock')}}"></use>
                                            </svg>
                                            <span>15 min</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-lg-3 col-xl-3">
                                    <div class="category-info__card">
                                        <div class="category-info__card-info">
                                            <span>Текст карточки второй</span>
                                        </div>
                                        <div class="category-info__card-duration">
                                            <svg width="20" height="20" fill="transparent" stroke="#6A677B">
                                                <use href="{{asset('img/icons/sprite.svg#icon-clock')}}"></use>
                                            </svg>
                                            <span>20 min</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-lg-3 col-xl-3">
                                    <div class="category-info__card">
                                        <div class="category-info__card-info">
                                            <span>Текст карточки третий</span>
                                        </div>
                                        <div class="category-info__card-duration">
                                            <svg width="20" height="20" fill="transparent" stroke="#6A677B">
                                                <use href="{{asset('img/icons/sprite.svg#icon-clock')}}"></use>
                                            </svg>
                                            <span>11 min</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-lg-3 col-xl-3">
                                    <div class="category-info__card">
                                        <div class="category-info__card-info">
                                            <span>Текст карточки четвёртый</span>
                                        </div>
                                        <div class="category-info__card-duration">
                                            <svg width="20" height="20" fill="transparent" stroke="#6A677B">
                                                <use href="{{asset('img/icons/sprite.svg#icon-clock')}}"></use>
                                            </svg>
                                            <span>9 min</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="ammunition">
    <div class="container">

        <div class="ammunition__cards">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-3 col-xxl-3">
                    <div class="row">
                        <div class="ammunition__col-sm--ver col-12 col-xl-12">
                            <div class="ammo-card">
                                <div class="ammo-card__img">
                                    <img class="lazy" data-src="{{asset('img/ammunition/ammunition-card-1.jpg')}}" src="{{asset('img/blank.gif')}}" alt="Снаряжение">
                                </div>
                                <div class="ammo-card__text">
                                    <a href="#" class="ammo-card__link">
                                        <span class="ammo-card__title">Снаряжение</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="ammunition__col-sm--ver col-12 col-xl-12">
                            <div class="ammo-card">
                                <div class="ammo-card__img">
                                    <img class="lazy" data-src="{{asset('img/ammunition/ammunition-card-2.jpg')}}" src="{{asset('img/blank.gif')}}" alt="Ножи и инструменты">
                                </div>
                                <div class="ammo-card__text">
                                    <a href="#" class="ammo-card__link">
                                        <span class="ammo-card__title">Ножи и инструменты</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-3 col-xxl-3">
                    <div class="row">
                        <div class="ammunition__col-big--ver col-12 col-xl-12">
                            <div class="ammo-card">
                                <div class="ammo-card__img">
                                    <img class="lazy" data-src="{{asset('img/ammunition/ammunition-card-3.jpg')}}" src="{{asset('img/blank.gif')}}" alt="Оружие">
                                </div>
                                <div class="ammo-card__text">
                                    <a href="#" class="ammo-card__link">
                                        <span class="ammo-card__title">Оружие</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-6 col-xxl-6">
                    <div class="row row-bullets">
                        <div class="ammunition__col-sm--gor col-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                            <div class="ammo-card">
                                <div class="ammo-card__img">
                                    <img class="lazy" data-src="{{asset('img/ammunition/ammunition-card-4.jpg')}}" src="{{asset('img/blank.gif')}}" alt="Патроны">
                                </div>
                                <div class="ammo-card__text">
                                    <a href="#" class="ammo-card__link">
                                        <span class="ammo-card__title">Патроны</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="ammunition__col-sm--gor col-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                            <div class="ammo-card">
                                <div class="ammo-card__img">
                                    <img class="lazy" data-src="{{asset('img/ammunition/ammunition-card-5.jpg')}}" src="{{asset('img/blank.gif')}}" alt="Аксессуары">
                                </div>
                                <div class="ammo-card__text">
                                    <a href="#" class="ammo-card__link">
                                        <span class="ammo-card__title">Аксессуары</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="ammunition__col-big--gor col-12 col-lg-12 col-xl-12 col-xxl-12">
                            <div class="ammo-card">
                                <div class="ammo-card__img">
                                    <img class="lazy" data-src="{{asset('img/ammunition/ammunition-card-6.jpg')}}" src="{{asset('img/blank.gif')}}" alt="Тир">
                                </div>
                                <div class="ammo-card__text">
                                    <a href="#" class="ammo-card__link">
                                        <span class="ammo-card__title">Тир</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<div class="weapon">
    <div class="container">
        <div class="weapon-cards">

                <div class="swiper-container weapon-swiper">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="weapon-card">
                                <div class="weapon-card__top">
                                    <div class="weapon-card__label card-label card-label--new">Новинка</div>
                                    <div class="weapon-card__buttons d-flex flex-column">
                                        <button class="weapon-card__button wish-button">
                                            <svg width="21px" height="20px" fill="black">
                                                <use href="{{asset('img/icons/sprite.svg#icon-wish')}}"></use>
                                            </svg>
                                        </button>
                                        <button class="weapon-card__button compare-button">
                                            <svg width="21px" height="21px" fill="black">
                                                <use href="{{asset('img/icons/sprite.svg#icon-compare')}}"></use>
                                            </svg>
                                        </button>
                                        <button class="weapon-card__button play-button">
                                            <svg width="21px" height="21px" fill="black">
                                                <use href="{{asset('img/icons/sprite.svg#icon-play')}}"></use>
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="weapon-card__img">
                                        <img class="lazy" data-src="{{asset('img/weapon/weapon-card-img-1.jpg')}}" src="{{asset('img/blank.gif')}}" alt="Ружье Mossberg 590M Mag-Fed">
                                    </div>
                                    <div class="weapon-card__gift">
                                        <svg width="21" height="21">
                                            <use href="{{asset('img/icons/sprite.svg#icon-gift-box')}}"></use>
                                        </svg>
                                    </div>
                                </div>
                                <div class="weapon-card__bottom">
                                    <div class="weapon-card__info">
                                        <a href="#" class="weapon-card__title">Ружье Mossberg 590M Mag-Fed</a>
                                        <div class="weapon-card__rating">
                                            <div class="weapon-card__rating-stars stars" style="--rating: 4;" aria-label="Рейтинг товара 4 из 5">
                                            </div>
                                            <div class="weapon-card__rating-reviews">10 отзывов</div>
                                        </div>
                                    </div>
                                    <div class="weapon-card__sale">
                                        <div class="weapon-card__prices">
                                            <div class="weapon-card__old-price">
                                                <span class="weapon-card__old-price-value">32 509</span>
                                                <span class="weapon-card__old-price-currency">&#8372;</span>
                                            </div>
                                            <div class="weapon-card__price weapon-card__price_color_red">
                                                <span class="weapon-card__price-value">27 632.65</span>
                                                <span class="weapon-card__price-currency">&#8372;</span>
                                            </div>
                                        </div>

                                        <div class="weapon-card__buy">
                                            <button class="buy-button">
                                                <svg width="21" height="21" fill="black">
                                                    <use href="{{asset('img/icons/sprite.svg#icon-buy-basket')}}"></use>
                                                </svg>
                                                <span class="buy-button__title">Купить</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="weapon-card">
                                <div class="weapon-card__top">
                                    <div class="weapon-card__label card-label card-label--action">Акция</div>
                                    <div class="weapon-card__buttons d-flex flex-column">
                                        <button class="weapon-card__button wish-button">
                                            <svg width="21px" height="20px" fill="black">
                                                <use href="{{asset('img/icons/sprite.svg#icon-wish')}}"></use>
                                            </svg>
                                        </button>
                                        <button class="weapon-card__button compare-button">
                                            <svg width="21px" height="21px" fill="black">
                                                <use href="{{asset('img/icons/sprite.svg#icon-compare')}}"></use>
                                            </svg>
                                        </button>
{{--                                        <button class="weapon-card__button play-button">--}}
{{--                                            <svg width="21px" height="21px" fill="black">--}}
{{--                                                <use href="{{asset('img/icons/sprite.svg#icon-play')}}"></use>--}}
{{--                                            </svg>--}}
{{--                                        </button>--}}
                                    </div>
                                    <div class="weapon-card__img">
                                        <img class="lazy" data-src="{{asset('img/weapon/weapon-card-img-1.jpg')}}" src="{{asset('img/blank.gif')}}" alt="Ружье Mossberg 590M Mag-Fed к.12 18.5 Synthetic">
                                    </div>
                                    <div class="weapon-card__gift">
                                        <svg width="21" height="21">
                                            <use href="{{asset('img/icons/sprite.svg#icon-gift-box')}}"></use>
                                        </svg>
                                    </div>
                                </div>
                                <div class="weapon-card__bottom">
                                    <div class="weapon-card__info">
                                        <a href="#" class="weapon-card__title">Ружье Mossberg 590M Mag-Fed к.12 18.5" Synthetic</a>
                                        <div class="weapon-card__rating">
                                            <div class="weapon-card__rating-stars stars" style="--rating: 4;" aria-label="Рейтинг товара 4 из 5">
                                            </div>
                                            <div class="weapon-card__rating-reviews">2 отзыва</div>
                                        </div>
                                    </div>
                                    <div class="weapon-card__sale">
                                        <div class="weapon-card__prices">
                                            <div class="weapon-card__old-price">
                                                <span class="weapon-card__old-price-value">32 509</span>
                                                <span class="weapon-card__old-price-currency">&#8372;</span>
                                            </div>
                                            <div class="weapon-card__price weapon-card__price_color_red">
                                                <span class="weapon-card__price-value">27 632.65</span>
                                                <span class="weapon-card__price-currency">&#8372;</span>
                                            </div>
                                        </div>

                                        <div class="weapon-card__buy">
                                            <button class="buy-button">
                                                <svg width="21" height="21" fill="black">
                                                    <use href="{{asset('img/icons/sprite.svg#icon-buy-basket')}}"></use>
                                                </svg>
                                                <span class="buy-button__title">Купить</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="weapon-card">
                                <div class="weapon-card__top">
                                    <div class="weapon-card__label card-label card-label--sale">-70%</div>
                                    <div class="weapon-card__buttons d-flex flex-column">
                                        <button class="weapon-card__button wish-button">
                                            <svg width="21px" height="20px" fill="black">
                                                <use href="{{asset('img/icons/sprite.svg#icon-wish')}}"></use>
                                            </svg>
                                        </button>
                                        <button class="weapon-card__button compare-button">
                                            <svg width="21px" height="21px" fill="black">
                                                <use href="{{asset('img/icons/sprite.svg#icon-compare')}}"></use>
                                            </svg>
                                        </button>
    {{--                                <button class="weapon-card__button play-button">--}}
    {{--                                    <svg width="21px" height="21px" fill="black">--}}
    {{--                                        <use href="{{asset('img/icons/sprite.svg#icon-play')}}"></use>--}}
    {{--                                    </svg>--}}
    {{--                                </button>--}}
                                    </div>
                                    <div class="weapon-card__img">
                                        <img class="lazy" data-src="{{asset('img/weapon/weapon-card-img-1.jpg')}}" src="{{asset('img/blank.gif')}}" alt="Ружье Mossberg 590M Mag-Fed к.12 18.5 Synthetic">
                                    </div>
                                    <div class="weapon-card__gift">
                                        <svg width="21" height="21">
                                            <use href="{{asset('img/icons/sprite.svg#icon-gift-box')}}"></use>
                                        </svg>
                                    </div>
                                </div>
                                <div class="weapon-card__bottom">
                                    <a href="#" class="weapon-card__title">Ружье Mossberg 590M Mag-Fed к.12 18.5" Synthetic</a>
                                    <div class="weapon-card__rating">
                                        <div class="weapon-card__rating-stars stars" style="--rating: 4;" aria-label="Рейтинг товара 4 из 5">
                                        </div>
                                        <div class="weapon-card__rating-reviews">12 отзывов</div>
                                    </div>
                                    <div class="weapon-card__sale">
                                        <div class="weapon-card__prices">
                                            {{--                                <div class="weapon-card__old-price">--}}
                                            {{--                                    <span class="weapon-card__old-price-value">32 509</span>--}}
                                            {{--                                    <span class="weapon-card__old-price-currency">&#8372;</span>--}}
                                            {{--                                </div>--}}
                                            <div class="weapon-card__price weapon-card__price_color_gray">
                                                <span class="weapon-card__price-value">27 632.65</span>
                                                <span class="weapon-card__price-currency">&#8372;</span>
                                            </div>
                                        </div>

                                        <div class="weapon-card__buy">
                                            <button class="buy-button">
                                                <svg width="21" height="21" fill="black">
                                                    <use href="{{asset('img/icons/sprite.svg#icon-buy-basket')}}"></use>
                                                </svg>
                                                <span class="buy-button__title">Купить</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="weapon-card">
                                <div class="weapon-card__top">
                                    <div class="weapon-card__label card-label card-label--top">Топ продаж</div>
                                    <div class="weapon-card__buttons d-flex flex-column">
                                        <button class="weapon-card__button wish-button">
                                            <svg width="21px" height="20px" fill="black">
                                                <use href="{{asset('img/icons/sprite.svg#icon-wish')}}"></use>
                                            </svg>
                                        </button>
                                        <button class="weapon-card__button compare-button">
                                            <svg width="21px" height="21px" fill="black">
                                                <use href="{{asset('img/icons/sprite.svg#icon-compare')}}"></use>
                                            </svg>
                                        </button>
                                        <button class="weapon-card__button play-button">
                                            <svg width="21px" height="21px" fill="black">
                                                <use href="{{asset('img/icons/sprite.svg#icon-play')}}"></use>
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="weapon-card__img">
                                        <img class="lazy" data-src="{{asset('img/weapon/weapon-card-img-1.jpg')}}" src="{{asset('img/blank.gif')}}" alt="Ружье Mossberg 590M Mag-Fed к.12 18.5 Synthetic">
                                    </div>
                                    <div class="weapon-card__gift">
                                        <svg width="21" height="21">
                                            <use href="{{asset('img/icons/sprite.svg#icon-gift-box')}}"></use>
                                        </svg>
                                    </div>
                                </div>
                                <div class="weapon-card__bottom">
                                    <a href="#" class="weapon-card__title">Ружье Mossberg 590M Mag-Fed к.12 18.5" Synthetic</a>
                                    <div class="weapon-card__rating">
                                        <div class="weapon-card__rating-stars stars" style="--rating: 4;" aria-label="Рейтинг товара 4 из 5">
                                        </div>
                                        <div class="weapon-card__rating-reviews">46 отзывов</div>
                                    </div>
                                    <div class="weapon-card__sale">
                                        <div class="weapon-card__prices">
                                            <div class="weapon-card__old-price">
                                                <span class="weapon-card__old-price-value">32 509</span>
                                                <span class="weapon-card__old-price-currency">&#8372;</span>
                                            </div>
                                            <div class="weapon-card__price weapon-card__price_color_red">
                                                <span class="weapon-card__price-value">27 632.65</span>
                                                <span class="weapon-card__price-currency">&#8372;</span>
                                            </div>
                                        </div>

                                        <div class="weapon-card__buy">
                                            <button class="buy-button">
                                                <svg width="21" height="21" fill="black">
                                                    <use href="{{asset('img/icons/sprite.svg#icon-buy-basket')}}"></use>
                                                </svg>
                                                <span class="buy-button__title">Купить</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="weapon-card">
                                <div class="weapon-card__top">
                                    <div class="weapon-card__label card-label card-label--top">Топ продаж</div>
                                    <div class="weapon-card__buttons d-flex flex-column">
                                        <button class="weapon-card__button wish-button">
                                            <svg width="21px" height="20px" fill="black">
                                                <use href="{{asset('img/icons/sprite.svg#icon-wish')}}"></use>
                                            </svg>
                                        </button>
                                        <button class="weapon-card__button compare-button">
                                            <svg width="21px" height="21px" fill="black">
                                                <use href="{{asset('img/icons/sprite.svg#icon-compare')}}"></use>
                                            </svg>
                                        </button>
                                        <button class="weapon-card__button play-button">
                                            <svg width="21px" height="21px" fill="black">
                                                <use href="{{asset('img/icons/sprite.svg#icon-play')}}"></use>
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="weapon-card__img">
                                        <img class="lazy" data-src="{{asset('img/weapon/weapon-card-img-1.jpg')}}" src="{{asset('img/blank.gif')}}" alt="Ружье Mossberg 590M Mag-Fed к.12 18.5 Synthetic">
                                    </div>
                                    <div class="weapon-card__gift">
                                        <svg width="21" height="21">
                                            <use href="{{asset('img/icons/sprite.svg#icon-gift-box')}}"></use>
                                        </svg>
                                    </div>
                                </div>
                                <div class="weapon-card__bottom">
                                    <a href="#" class="weapon-card__title">Ружье Mossberg 590M Mag-Fed к.12 18.5" Synthetic</a>
                                    <div class="weapon-card__rating">
                                        <div class="weapon-card__rating-stars stars" style="--rating: 4;" aria-label="Рейтинг товара 4 из 5">
                                        </div>
                                        <div class="weapon-card__rating-reviews">46 отзывов</div>
                                    </div>
                                    <div class="weapon-card__sale">
                                        <div class="weapon-card__prices">
                                            <div class="weapon-card__old-price">
                                                <span class="weapon-card__old-price-value">32 509</span>
                                                <span class="weapon-card__old-price-currency">&#8372;</span>
                                            </div>
                                            <div class="weapon-card__price weapon-card__price_color_red">
                                                <span class="weapon-card__price-value">27 632.65</span>
                                                <span class="weapon-card__price-currency">&#8372;</span>
                                            </div>
                                        </div>

                                        <div class="weapon-card__buy">
                                            <button class="buy-button">
                                                <svg width="21" height="21" fill="black">
                                                    <use href="{{asset('img/icons/sprite.svg#icon-buy-basket')}}"></use>
                                                </svg>
                                                <span class="buy-button__title">Купить</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="weapon-card">
                                <div class="weapon-card__top">
                                    <div class="weapon-card__label card-label card-label--top">Топ продаж</div>
                                    <div class="weapon-card__buttons d-flex flex-column">
                                        <button class="weapon-card__button wish-button">
                                            <svg width="21px" height="20px" fill="black">
                                                <use href="{{asset('img/icons/sprite.svg#icon-wish')}}"></use>
                                            </svg>
                                        </button>
                                        <button class="weapon-card__button compare-button">
                                            <svg width="21px" height="21px" fill="black">
                                                <use href="{{asset('img/icons/sprite.svg#icon-compare')}}"></use>
                                            </svg>
                                        </button>
                                        <button class="weapon-card__button play-button">
                                            <svg width="21px" height="21px" fill="black">
                                                <use href="{{asset('img/icons/sprite.svg#icon-play')}}"></use>
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="weapon-card__img">
                                        <img class="lazy" data-src="{{asset('img/weapon/weapon-card-img-1.jpg')}}" src="{{asset('img/blank.gif')}}" alt="Ружье Mossberg 590M Mag-Fed к.12 18.5 Synthetic">
                                    </div>
                                    <div class="weapon-card__gift">
                                        <svg width="21" height="21">
                                            <use href="{{asset('img/icons/sprite.svg#icon-gift-box')}}"></use>
                                        </svg>
                                    </div>
                                </div>
                                <div class="weapon-card__bottom">
                                    <a href="#" class="weapon-card__title">Ружье Mossberg 590M Mag-Fed к.12 18.5" Synthetic</a>
                                    <div class="weapon-card__rating">
                                        <div class="weapon-card__rating-stars stars" style="--rating: 4;" aria-label="Рейтинг товара 4 из 5">
                                        </div>
                                        <div class="weapon-card__rating-reviews">46 отзывов</div>
                                    </div>
                                    <div class="weapon-card__sale">
                                        <div class="weapon-card__prices">
                                            <div class="weapon-card__old-price">
                                                <span class="weapon-card__old-price-value">32 509</span>
                                                <span class="weapon-card__old-price-currency">&#8372;</span>
                                            </div>
                                            <div class="weapon-card__price weapon-card__price_color_red">
                                                <span class="weapon-card__price-value">27 632.65</span>
                                                <span class="weapon-card__price-currency">&#8372;</span>
                                            </div>
                                        </div>

                                        <div class="weapon-card__buy">
                                            <button class="buy-button">
                                                <svg width="21px" height="21px" fill="black">
                                                    <use href="{{asset('img/icons/sprite.svg#icon-buy-basket')}}"></use>
                                                </svg>
                                                <span class="buy-button__title">Купить</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="swiper-scrollbar"></div>
                </div>
        </div>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <div class="footer__inner">
            <a href="#" class="footer-up-btn d-flex flex-column align-items-center">
                <div class="footer-up-btn__img">
                    <svg width="28px" height="19px" fill="#5C6D7D">
                        <use href="{{asset('img/icons/sprite.svg#icon-arrow-button-up')}}"></use>
                    </svg>
                </div>
                <span>Вверх</span>
            </a>
            <div class="footer__top">
                <div class="row">
                    <div class="col-xl-4">
                        <div class="footer__links">
                            <div class="footer__logo">
                                <a href="#" class="footer__logo-link">
                                    <svg width="114px" height="45px" fill="#fff">
                                        <use href="{{asset('img/icons/sprite.svg#icon-wezom-logo')}}"></use>
                                    </svg>
                                </a>
                            </div>
                            <div class="footer__social-group">
                                <div class="footer__social-item">
                                    <a href="#" class="footer__social-link">
                                        <svg class="footer__social-img" width="22px" height="22px" fill="#DDE8F0" fill-opacity="0.5">
                                            <use href="{{asset('img/icons/sprite.svg#icon-inst')}}"></use>
                                        </svg>
                                    </a>
                                </div>
                                <div class="footer__social-item">
                                    <a href="#" class="footer__social-link">
                                        <svg class="footer__social-img" width="12px" height="24px" fill="#DDE8F0" fill-opacity="0.5">
                                            <use href="{{asset('img/icons/sprite.svg#icon-facb')}}"></use>
                                        </svg>
                                    </a>
                                </div>
                                <div class="footer__social-item">
                                    <a href="#" class="footer__social-link">
                                        <svg class="footer__social-img" width="22px" height="18px" fill="#DDE8F0" fill-opacity="0.5">
                                            <use href="{{asset('img/icons/sprite.svg#icon-tw')}}"></use>
                                        </svg>
                                    </a>
                                </div>
                                <div class="footer__social-item">
                                    <a href="#" class="footer__social-link">
                                        <svg class="footer__social-img" width="26px" height="18px" fill="#DDE8F0" fill-opacity="0.5">
                                            <use href="{{asset('img/icons/sprite.svg#icon-ytb')}}"></use>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="footer__partnership">
                                <div class="footer-delivery">
                                    <svg class="footer__delivery-img" width="84px" height="30px" fill="#DDE8F0" fill-opacity="0.5">
                                        <use href="{{asset('img/icons/sprite.svg#icon-nova-poshta')}}"></use>
                                    </svg>
                                </div>
                                <div class="footer-payments">
                                    <div class="footer-payments__item">
                                        <img class="lazy footer-payments__img" data-src="{{asset('img/footer/visa.jpg')}}" src="{{asset('img/blank.gif')}}" alt="Visa">
                                    </div>
                                    <div class="footer-payments__item">
                                        <img class="lazy footer-payments__img" data-src="{{asset('img/footer/mc.jpg')}}" src="{{asset('img/blank.gif')}}" alt="MasterCard">
                                    </div>
                                    <div class="footer-payments__item">
                                        <img class="lazy footer-payments__img" data-src="{{asset('img/footer/me.jpg')}}" src="{{asset('img/blank.gif')}}" alt="Maestro">
                                    </div>
                                    <div class="footer-payments__item">
                                        <img class="lazy footer-payments__img" data-src="{{asset('img/footer/pp.jpg')}}" src="{{asset('img/blank.gif')}}" alt="PayPal">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7 offset-xl-1 d-flex">
                        <div class="footer__group">
                            <div class="row">
                                <div class="col-xl-4">
                                    <div class="footer__services">
                                        <h4 class="footer__title">Каталог</h4>
                                        <div class="footer__services-group">
                                            <div class="footer__services-item">
                                                <a href="#" class="footer__services-link">Ноутбуки</a>
                                            </div>
                                            <div class="footer__services-item">
                                                <a href="#" class="footer__services-link">Планшеты</a>
                                            </div>
                                            <div class="footer__services-item">
                                                <a href="#" class="footer__services-link">Аксессуары для планшетов и электронных книг</a>
                                            </div>
                                            <div class="footer__services-item">
                                                <a href="#" class="footer__services-link">Кабели и переходники</a>
                                            </div>
                                            <div class="footer__services-item">
                                                <a href="#" class="footer__services-link">Сумки для ноутбуков</a>
                                            </div>
                                            <div class="footer__services-item">
                                                <a href="#" class="footer__services-link">Автотовары</a>
                                            </div>
                                            <div class="footer__services-item">
                                                <a href="#" class="footer__services-link">Сантехника</a>
                                            </div>
                                            <div class="footer__services-item">
                                                <a href="#" class="footer__services-link">Ремонт</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-4">
                                    <div class="footer__info">
                                        <h4 class="footer__title">Клиентам</h4>
                                        <div class="footer__info-group">
                                            <div class="footer__info-item">
                                                <a href="#" class="footer__info-link">Политика конфиденциальности</a>
                                            </div>
                                            <div class="footer__info-item">
                                                <a href="#" class="footer__info-link">Доставка и оплата</a>
                                            </div>
                                            <div class="footer__info-item">
                                                <a href="#" class="footer__info-link">Способы оплаты</a>
                                            </div>
                                            <div class="footer__info-item">
                                                <a href="#" class="footer__info-link">Гарантия</a>
                                            </div>
                                            <div class="footer__info-item">
                                                <a href="#" class="footer__info-link">Регенерация турбины</a>
                                            </div>
                                            <div class="footer__info-item">
                                                <a href="#" class="footer__info-link">Контакты</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-4">
                                    <div class="footer__hotline">
                                        <h4 class="footer__title">Горячая линия</h4>
                                        <div class="footer__hotline-group">
                                            <div class="footer__hotline-item footer__hotline-main-item">
                                                <a href="tel:+380800000000" class="footer__hotline-link">0 800 000 000</a>
                                            </div>
                                            <div class="footer__hotline-item">
                                                <a href="tel:+380680000000" class="footer__hotline-link">+38 068 000 00 00</a>
                                            </div>
                                            <div class="footer__hotline-item">
                                                <a href="tel:+380990000000" class="footer__hotline-link">+38 099 000 00 00</a>
                                            </div>
                                            <div class="footer__hotline-item">
                                                <a href="tel:+380960000000" class="footer__hotline-link">+38 096 000 00 00</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer__authorship">
                <div class="row">
                    <div class="col-xl-2 offset-xl-1">
                        <div class="footer__authorship-author">2020 © Test</div>
                    </div>
                    <div class="col-xl-3 offset-xl-5">
                        <div class="footer__authorship-developer">
                            Разработка <span>\</span>\<a class="footer__authorship-link" href="#">Wezom</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>


<script src="{{asset('js/app.js')}}"></script>

</body>
</html>
