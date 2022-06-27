<x-head />

@yield('content')

<button type="submit">
{{-- {{ route('') }} --}}

    @yield('btn')
</button>
	</form>
</div>

<script src="js/script.js"></script>

@livewireScripts

</body>
</html>
