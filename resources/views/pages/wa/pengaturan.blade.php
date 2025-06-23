@extends('layouts.admin')

@section('content')
    <div class="container mx-auto px-4 py-6">
        <!-- Header Section -->
        <div class="mb-6">
            <h1 class="text-2xl font-bold text-gray-800">WhatsApp Notification Settings</h1>
            <p class="text-gray-600">Manage your WhatsApp notification templates and settings</p>
        </div>

        <!-- Connection Status Card -->
        <div class="bg-white rounded-lg shadow-lg p-6 mb-6">
            <div class="flex items-center justify-between">
                <div>
                    <h2 class="text-lg font-semibold text-gray-800">WhatsApp Connection Status</h2>
                    <p class="text-green-600 flex items-center mt-2">
                        <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                clip-rule="evenodd" />
                        </svg>
                        Connected
                    </p>
                </div>
                <button onclick="reconnectWhatsApp()"
                    class="px-4 py-2 bg-green-500 text-white rounded-lg hover:bg-green-600 flex items-center">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                    </svg>
                    Reconnect
                </button>
            </div>
        </div>

        <!-- Message Templates Section -->
        <div class="bg-white rounded-lg shadow-lg p-6 mb-6">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-lg font-semibold text-gray-800">Message Templates</h2>
                <button onclick="openTemplateModal()"
                    class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 flex items-center">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                    </svg>
                    Add Template
                </button>
            </div>

            <!-- Templates Table -->
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Template Name</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Message</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Variables</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <!-- Sample Template Row -->
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Queue Notification</td>
                            <td class="px-6 py-4 text-sm text-gray-500">Hello {name}, your queue number {queue} is ready.
                            </td>
                            <td class="px-6 py-4 text-sm text-gray-500">{name}, {queue}</td>
                            <td class="px-6 py-4 text-sm font-medium space-x-2">
                                <button onclick="editTemplate(1)" class="text-blue-600 hover:text-blue-900">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                    </svg>
                                </button>
                                <button onclick="deleteTemplate(1)" class="text-red-600 hover:text-red-900">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                    </svg>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Template Modal -->
    <div id="templateModal" class="fixed inset-0 z-50 hidden">
        <div class="fixed inset-0 bg-black bg-opacity-50" onclick="closeTemplateModal()"></div>

        <div class="fixed inset-0 flex items-center justify-center p-4">
            <div class="bg-white rounded-lg shadow-xl w-full max-w-md">
                <div class="px-6 py-4 border-b">
                    <h3 class="text-xl font-semibold text-gray-900" id="modalTitle">Add Message Template</h3>
                </div>

                <div class="px-6 py-4">
                    <form id="templateForm">
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="templateName">
                                Template Name
                            </label>
                            <input type="text" id="templateName" name="templateName"
                                class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                                required>
                        </div>

                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="message">
                                Message
                            </label>
                            <textarea id="message" name="message" rows="4"
                                class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required></textarea>
                            <p class="text-sm text-gray-500 mt-1">Use {variable} for dynamic content</p>
                        </div>

                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="variables">
                                Variables (comma-separated)
                            </label>
                            <input type="text" id="variables" name="variables"
                                class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                                placeholder="name, queue, date">
                        </div>
                    </form>
                </div>

                <div class="px-6 py-4 border-t bg-gray-50 flex justify-end space-x-3">
                    <button type="button" onclick="closeTemplateModal()"
                        class="px-4 py-2 text-gray-600 hover:text-gray-800 font-medium rounded-lg hover:bg-gray-100">
                        Cancel
                    </button>
                    <button type="button" onclick="saveTemplate()"
                        class="px-4 py-2 bg-blue-500 text-white font-medium rounded-lg hover:bg-blue-600">
                        Save Template
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        let editingId = null;

        function reconnectWhatsApp() {
            // Handle WhatsApp reconnection
            console.log('Reconnecting to WhatsApp...');
        }

        function openTemplateModal(id = null) {
            editingId = id;
            const modal = document.getElementById('templateModal');
            const form = document.getElementById('templateForm');
            const title = document.getElementById('modalTitle');

            form.reset();
            title.textContent = id ? 'Edit Message Template' : 'Add Message Template';

            if (id) {
                // Fetch and populate template data
            }

            modal.classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        }

        function closeTemplateModal() {
            const modal = document.getElementById('templateModal');
            modal.classList.add('hidden');
            document.body.style.overflow = 'auto';
            editingId = null;
        }

        function saveTemplate() {
            const form = document.getElementById('templateForm');
            const formData = new FormData(form);

            if (editingId) {
                formData.append('id', editingId);
            }

            // Handle template save/update
            closeTemplateModal();
        }

        function editTemplate(id) {
            openTemplateModal(id);
        }

        function deleteTemplate(id) {
            if (confirm('Are you sure you want to delete this template?')) {
                // Handle template deletion
            }
        }

        // Close modal when pressing Escape
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                closeTemplateModal();
            }
        });

        // Prevent modal close when clicking modal content
        document.querySelector('#templateModal .bg-white').addEventListener('click', function(e) {
            e.stopPropagation();
        });
    </script>
@endpush
