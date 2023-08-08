import './bootstrap';

import Alpine from 'alpinejs';
import focus from '@alpinejs/focus';
import Quill from "quill";

window.Quill = Quill;

window.Alpine = Alpine;

Alpine.plugin(focus);

Alpine.start();
