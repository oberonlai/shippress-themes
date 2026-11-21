/* No build step. The same live server-rendered block in the editor and front end. */
(function (wp) {
  const attributes = {};
  ['kind', 'fallback', 'email', 'label', 'submit', 'notice', 'subject'].forEach(function (key) {
    attributes[key] = {type: 'string', default: ''};
  });
  wp.blocks.registerBlockType('shippress/form', {
    apiVersion: 3, title: wp.i18n.__('Form slot', 'shippress'), icon: 'email', category: 'widgets',
    attributes: attributes, supports: {html: false},
    edit: function (props) {
      const ServerSideRender = wp.serverSideRender.default || wp.serverSideRender;
      return wp.element.createElement('div', wp.blockEditor.useBlockProps(),
        wp.element.createElement(ServerSideRender, {block: 'shippress/form', attributes: props.attributes}));
    },
    save: function () { return null; }
  });
}(window.wp));
