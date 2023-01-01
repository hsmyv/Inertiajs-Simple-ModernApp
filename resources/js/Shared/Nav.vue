<template lang="">
     <nav>
        <ul class="flex space-x-6">
            <li>
                <NavLink href="/" :ative="$page.component == 'home'">
                Home
            </NavLink>
        </li>
            <li>
                <NavLink href="/users" :ative="$page.component == 'users'">
                Users
            </NavLink>
        </li>

            <li>
                <NavLink href="/settings" :ative="$page.component == 'settings'">
                Settings
            </NavLink>
        </li>
        </ul>
    </nav>
</template>
<script>
import NavLink from "../Shared/NavLink";
export default {
    components: {NavLink},
}
</script>

<style lang="">

</style>
