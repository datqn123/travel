function selectedTab(el) {
      document.querySelectorAll("#menu-service li").forEach((li) => {
          li.classList.remove("bg-[#0194f3]", "text-white")
          li.classList.add("bg-blue-100", "text-[#0194f3]")
      })

      el.classList.remove("bg-blue-100", "text-[#0194f3]")
      el.classList.add("bg-[#0194f3]", "text-white")
}
window.selectedTab = selectedTab;
