/* =========================
MENU
========================= */

const menuBtn = document.querySelector(".class-header-left")
const menuClose = document.querySelector(".class-menu-close")
const overlay = document.querySelector(".class-menu-overlay")

if(menuBtn){
    menuBtn.addEventListener("click",()=>{
        document.body.classList.add("menu-open")
    })
}

function closeMenu(){
    document.body.classList.remove("menu-open")
}

menuClose?.addEventListener("click",closeMenu)
overlay?.addEventListener("click",closeMenu)


/* =========================
CARRITO DESPLEGABLE
========================= */

const carritoBtn = document.querySelector(".class-desplegable-carrito-btn")
const carritoClose = document.querySelector(".class-desplegable-carrito-close")
const carritoOverlay = document.querySelector(".class-desplegable-carrito-overlay")

function openCarrito(e) {
    e.preventDefault()
    document.body.classList.add("carrito-open")
}

function closeCarrito() {
    document.body.classList.remove("carrito-open")
}

carritoBtn?.addEventListener("click", openCarrito)
carritoClose?.addEventListener("click", closeCarrito)
carritoOverlay?.addEventListener("click", closeCarrito)

/* =========================
DROPDOWN
========================= */

document.querySelectorAll(".class-menu-dropdown").forEach(item=>{

    item.addEventListener("click",()=>{

        item.classList.toggle("active")

        const sub=item.nextElementSibling

        if(sub.style.display==="block"){
            sub.style.display="none"
        }else{
            sub.style.display="block"
        }

    })

})

/* =========================
HEADER SCROLL
========================= */

let lastScroll = 0
const header = document.querySelector(".class-header-container")

if (header) {
    const headerHeight = header.offsetHeight || 100
    const transparentPages =
        document.body.classList.contains("class-home") ||
        document.body.classList.contains("class-proyectos-page") ||
        document.body.classList.contains("class-sobre-nosotros-page")

    window.addEventListener("scroll", () => {
        const currentScroll = window.pageYOffset

        if (currentScroll <= 0) {
            header.classList.remove("class-header-hidden")
            if (transparentPages) {
                header.classList.remove("class-header-scrolled")
            }
            lastScroll = currentScroll
            return
        }

        const isScrollingDown = currentScroll > lastScroll + 5
        const isScrollingUp = currentScroll < lastScroll - 5

        if (transparentPages) {
            if (isScrollingDown) {
                if (currentScroll <= headerHeight) {
                    header.classList.remove("class-header-scrolled")
                    header.classList.remove("class-header-hidden")
                } else {
                    header.classList.add("class-header-hidden")
                }
            } else if (isScrollingUp) {
                header.classList.remove("class-header-hidden")
                header.classList.add("class-header-scrolled")
            }
        } else {
            header.classList.add("class-header-scrolled")
            if (isScrollingDown && currentScroll > headerHeight) {
                header.classList.add("class-header-hidden")
            } else if (isScrollingUp) {
                header.classList.remove("class-header-hidden")
            }
        }

        lastScroll = currentScroll
    })
}

/* =========================
SEARCH
========================= */

const search = document.querySelector(".class-header-search")
const searchBtn = document.querySelector(".class-header-search-icon")
const searchInput = document.querySelector(".class-header-search-input")

if(searchBtn){

    searchBtn.addEventListener("click",(e)=>{

        e.preventDefault()
        e.stopPropagation()
        search.classList.toggle("active")

        if(search.classList.contains("active")){
            searchInput.focus()
        }

    })

}

/* CERRAR AL HACER CLICK FUERA */

document.addEventListener("click",(e)=>{

    if(search && !search.contains(e.target)){
        search.classList.remove("active")
    }

})