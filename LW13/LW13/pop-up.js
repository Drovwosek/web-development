let popupBackground=document.querySelector('.popup-background');let popup=document.querySelector('.mainform');let openPopupButtonHeader=document.querySelector('.header__button');let openPopupButtonMain=document.querySelector('.mainscreen__button');let closePopupButton=document.querySelector('.mainform__cross');openPopupButtonHeader.addEventListener('click',openPopup);openPopupButtonMain.addEventListener('click',openPopup);closePopupButton.addEventListener('click',closePopup);document.addEventListener('click',closeByClickOnBackground);document.addEventListener('keydown',closeByEscape);function openPopup(){popupBackground.classList.add('active');popup.classList.add('active')}function closePopup(){popupBackground.classList.remove('active');popup.classList.remove('active')}function closeByClickOnBackground(event){if(event.target===popupBackground){closePopup()}}function closeByEscape(event){if(event.key==="Escape"){closePopup()}}