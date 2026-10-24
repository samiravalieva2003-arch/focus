// слайдер для блока с премьерами
const track = document.querySelector('.premieres_track');
const cards = document.querySelectorAll('.premier');
const backBtn = document.querySelector('.premieres_cards .back_btn');
const nextBtn = document.querySelector('.premieres_cards .next_btn');

if (track && cards.length > 0 && backBtn && nextBtn) {
    let i = 0;
    const visible = 4;
    const max = Math.max(0, cards.length - visible);

    function update() {
         const step = cards[0].offsetWidth + 20;
    track.style.transform = `translateX(-${i * step}px)`;
    backBtn.style.opacity = i === 0 ? '0' : '1';
    backBtn.style.pointerEvents = i === 0 ? 'none' : 'auto';
    nextBtn.style.opacity = i >= max ? '0' : '1';
    nextBtn.style.pointerEvents = i >= max ? 'none' : 'auto';
    }

    nextBtn.addEventListener('click', function () {
        if (i < max) {
            i++;
            update();
        }
    });

    backBtn.addEventListener('click', function () {
        if (i > 0) {
            i--;
            update();
        }
    });

    update();
}
//раскрывающийся поиск
const searchWrapper = document.querySelector('.header_search');
const searchBtn = document.querySelector('.header_search_btn');
const searchInput = document.querySelector('.header_search_box input');


const overlay = document.createElement('div');
overlay.classList.add('search_overlay');
document.body.appendChild(overlay);

function openSearch() {
    searchWrapper.classList.add('active');
    overlay.classList.add('active');
    document.body.style.overflow = 'hidden';  
    searchInput.focus();
}

function closeSearch() {
    searchWrapper.classList.remove('active');
    overlay.classList.remove('active');
    document.body.style.overflow = '';       
}
if(searchBtn){
searchBtn.addEventListener('click', function () {
    if (searchWrapper.classList.contains('active')) {
        closeSearch();
    } else {
        openSearch();
    }
});
}
overlay.addEventListener('click', closeSearch);

document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape') {
        closeSearch();
    }
});
document.addEventListener('click', function (e) {
    if (!e.target.closest('.header_search')) {
        closeSearch();
    }
});

// бургер
const burger = document.querySelector('.burger');
const mobileMenu = document.querySelector('.mobile_menu');
const mobileClose = document.querySelector('.mobile_close');

if (burger && mobileMenu && mobileClose) {
    burger.addEventListener('click', () => {
        mobileMenu.classList.add('active');
        document.body.style.overflow = 'hidden';
    });

    mobileClose.addEventListener('click', () => {
        mobileMenu.classList.remove('active');
        document.body.style.overflow = '';
    });
}

//расккрая фильтрация
document.addEventListener('DOMContentLoaded', () => {
    const filterToggle = document.getElementById('filterToggle');
    const filterClose  = document.getElementById('filterClose');
    const filterBlock  = document.getElementById('filterBlock');
    const filterOverlay = document.getElementById('filterOverlay');

    const openFilter = () => {
        filterBlock.classList.add('active');
        filterOverlay.classList.add('active');
        document.body.classList.add('filter_open');
    };

    const closeFilter = () => {
        filterBlock.classList.remove('active');
        filterOverlay.classList.remove('active');
        document.body.classList.remove('filter_open');
    };

    filterToggle.addEventListener('click', openFilter);
    filterClose.addEventListener('click', closeFilter);
    filterOverlay?.addEventListener('click', closeFilter);

    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') closeFilter();
    });
}); 

//модалка выхода
    const logoutModal = document.getElementById('logoutModal');
    const openBtn = document.getElementById('openLogoutModal');
    const cancelBtn = document.getElementById('cancelLogout');
    const logoutOverlay = document.getElementById('closeLogoutModalOverlay');
    const closeBtn = document.getElementById('closeLogoutModalBtn');

    if (openBtn && logoutModal) {
        openBtn.addEventListener('click', () => {
            logoutModal.classList.add('active');
        });

        const closeModal = () => {
            logoutModal.classList.remove('active');
        };

        if (cancelBtn) cancelBtn.addEventListener('click', closeModal);
        if (logoutOverlay) logoutOverlay.addEventListener('click', closeModal);
        if (closeBtn) closeBtn.addEventListener('click', closeModal);
    }


//переход по страница профиля
    const tabs = document.querySelectorAll('.nav_links .link');
    const contents = document.querySelectorAll('.tab_content');

    if (tabs.length > 0) {
        tabs.forEach((tab, index) => {
            tab.addEventListener('click', () => {
                tabs.forEach(t => t.classList.remove('active'));
                contents.forEach(c => c.classList.remove('active'));
                tab.classList.add('active');
                if (contents[index]) {
                    contents[index].classList.add('active');
                }
            });
        });
    }

// модалка билета
document.addEventListener('DOMContentLoaded', () => {
    const modal = document.getElementById('ticketModal');
    if (!modal) return;

    const overlay = document.getElementById('ticketModalBg');
    const closeBtn = document.getElementById('ticketModalClose');

  
    document.querySelectorAll('.btn_ticket').forEach(btn => {
        btn.addEventListener('click', (e) => {
            e.preventDefault();
            modal.classList.add('active');
            document.body.style.overflow = 'hidden';
        });
    });


    const closeModal = () => {
        modal.classList.remove('active');
        document.body.style.overflow = '';
    };

    if (closeBtn) closeBtn.addEventListener('click', closeModal);
    if (overlay)  overlay.addEventListener('click', closeModal);

    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && modal.classList.contains('active')) {
            closeModal();
        }
    });
});


document.addEventListener('DOMContentLoaded', () => {
    const modalSession = document.getElementById('deleteSessionModal');

    if (!modalSession) return;


    const deleteSessionBtns = document.querySelectorAll('.admin_schedule .delete_btn');
    

    const closeBtn = document.getElementById('modalSessionClose');
    const cancelBtn = document.getElementById('modalSessionCancel');
    const bgOverlay = document.getElementById('modalSessionBg');


    deleteSessionBtns.forEach(btn => {
        btn.addEventListener('click', (e) => {
            e.preventDefault(); 
            modalSession.classList.add('active');
            document.body.style.overflow = 'hidden'; 
        });
    });


    const closeSessionModal = () => {
        modalSession.classList.remove('active');
        document.body.style.overflow = ''; 
    };


    if (closeBtn) closeBtn.addEventListener('click', closeSessionModal);
    if (cancelBtn) cancelBtn.addEventListener('click', closeSessionModal);
    if (bgOverlay) bgOverlay.addEventListener('click', closeSessionModal);


    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && modalSession.classList.contains('active')) {
            closeSessionModal();
        }
    });
});
    
// модалка удаления
    const deleteModal = document.getElementById('deleteModal');
    const deleteCloseBtn = document.getElementById('modalClose');
    const deleteCancelBtn = document.getElementById('modalCancel');
    const deleteBg = document.getElementById('modalBg');
    
    const deleteBtns = document.querySelectorAll('.admin_films_grid .delete_btn');

    if (deleteModal) {
        
        deleteBtns.forEach(btn => {
            btn.addEventListener('click', (e) => {
                deleteModal.classList.add('active');
            });
        });
        function closeDeleteModal() {
            deleteModal.classList.remove('active');
        }

        if (deleteCloseBtn) deleteCloseBtn.addEventListener('click', closeDeleteModal);
        if (deleteCancelBtn) deleteCancelBtn.addEventListener('click', closeDeleteModal);
        if (deleteBg) deleteBg.addEventListener('click', closeDeleteModal);
    }

// слайдер выбора дня
const daysEl      = document.querySelector('.days');
const dayCards    = document.querySelectorAll('.days label');
const daysPrevBtn = document.querySelector('.days_prev');
const daysNextBtn = document.querySelector('.days_next');

let dayIndex = 0;

function slideDays() {
    const step    = dayCards[0].offsetWidth + 10;
    const visible = 6;
    const max     = dayCards.length - visible;

    if (dayIndex > max) dayIndex = max;
    if (dayIndex < 0)   dayIndex = 0;

    daysEl.style.transform = 'translateX(-' + (dayIndex * step) + 'px)';

    daysPrevBtn.style.opacity = dayIndex === 0   ? '0.4' : '1';
    daysNextBtn.style.opacity = dayIndex === max ? '0.4' : '1';
}

if (daysNextBtn && daysPrevBtn && daysEl && dayCards.length) {
    daysNextBtn.addEventListener('click', () => { dayIndex++; slideDays(); });
    daysPrevBtn.addEventListener('click', () => { dayIndex--; slideDays(); });
    slideDays();
}





// показ трейлера
document.addEventListener('DOMContentLoaded', function () {
    const modal    = document.getElementById('videoModal');
    const overlay  = document.getElementById('videoOverlay') 
                     || document.querySelector('.video_modal_overlay');
    const closeBtn = document.getElementById('videoClose');
    const video    = document.getElementById('videoPlayer');
    const openBtn  = document.querySelector('.player_btn');


    function openVideo() {
        modal.classList.add('active');
        document.body.style.overflow = 'hidden';
        video.play().catch(function () {});
    }

    function closeVideo() {
        modal.classList.remove('active');
        document.body.style.overflow = '';
        video.pause();
        video.currentTime = 0;
    }

if (openBtn) openBtn.addEventListener('click', openVideo);
    if (closeBtn) closeBtn.addEventListener('click', closeVideo);
    if (overlay)  overlay.addEventListener('click', closeVideo);

    document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape' && modal.classList.contains('active')) closeVideo();
    });
});
































